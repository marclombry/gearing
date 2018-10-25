class secureInput {

		constructor(inputs)
		{
			this.inputs = inputs;
		}

		callInput()
		{
			console.log(this.inputs)
			alert(`votre nom est : ${this.inputs}`)
		}

		showInput()
		{
			console.log(this.inputs.elements.length);
			//console.log(document.forms[0][7].value);
			
				let val=[]
				for(let i=0; i<this.inputs.elements.length-1; i++)
				{
					
					val.push(this.inputs.elements[i].name)
				}
				console.log(val)
				return val
			
			
			
			
		}

		secure_input_length(input)
		{
			return (input.length >4 && input.length <255)
		}

		secure_email(input)
		{
			return (input.indexOf('@') <0)?false : true
		}

	}