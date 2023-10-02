const valueInput = document.querySelector('.value-input');
      const defaultColor = getComputedStyle(valueInput).backgroundColor;
    
      function updateColor(input) {
        const value = Number(input.value);
    
        if (value < 1 || value > 100) {
          input.style.backgroundColor = 'red';
        } if (value >= 50 && value <= 100) {
          input.style.backgroundColor = 'green';}
          else if (value >= 1 && value <= 49) {
            input.style.backgroundColor = 'orange';
        } else {
          input.style.backgroundColor = 'red';
        }
    
        if (input.value === '') {
          input.style.backgroundColor = 'rgb(211, 243, 209, 0.533)';
        }
      }


      function updateColorsTen() {
        const inputs = document.querySelectorAll('#g,#i');
      
        inputs.forEach(input => {
          input.addEventListener('input', () => {
            const value = Number(input.value);
      
            if (isNaN(value)) {
              input.style.backgroundColor = 'red';
            } else if (value === 10) {
              input.style.backgroundColor = 'green';
            } else if (input.value === '') {
              input.style.backgroundColor = 'rgb(211, 243, 209, 0.533)';
            } else {
              input.style.backgroundColor = 'red';
            }
          });
        });
      }


      function updateColorsACEMO() {
        const inputs = document.querySelectorAll('#a, #c, #e, #m, #o');
      
        inputs.forEach(input => {
          input.addEventListener('input', () => {
            const value = Number(input.value);
      
            if (isNaN(value)) {
              input.style.backgroundColor = 'red';
            } else if (value === 20) {
              input.style.backgroundColor = 'green';
            } else if (input.value === '') {
              input.style.backgroundColor = 'rgb(211, 243, 209, 0.533)';
            } else {
              input.style.backgroundColor = 'red';
            }
          });
        });
      }
      
      
      function updateColorsSix() {
        const inputs = document.querySelectorAll('#q');
      
        inputs.forEach(input => {
          input.addEventListener('input', () => {
            const value = Number(input.value);
      
            if (isNaN(value)) {
              input.style.backgroundColor = 'red';
            } else if (value === 60) {
              input.style.backgroundColor = 'green';
            } else if (input.value === '') {
              input.style.backgroundColor = 'rgb(211, 243, 209, 0.533)';
            } else {
              input.style.backgroundColor = 'red';
            }
          });
        });
      }


      function toggleFields(checkbox) {
        var tr = checkbox.closest('tr');
        var inputs = tr.querySelectorAll('input[type="text"]');
        for (var i = 0; i < inputs.length; i++) {
          if (checkbox.checked) {
            inputs[i].style.display = "";
          } else {
            inputs[i].style.display = "none";
          }
        }
      }

      
      document.getElementById('submitButton').addEventListener('click', checkInputs);

      function submitValues() {
        var flags = document.querySelectorAll('input[type="checkbox"]:checked');
        var values = {};
        var validFields = ['b', 'd', 'f', 'h', 'l', 'n', 'p', 'r'];
        var invalidFields = ['a', 'c', 'e', 'm'];
        var form = document.createElement("form");
        var flagSelected = false;
        var allFieldsFilled = true;
        var errorFound = false;
      
        flags.forEach(function(flag) {
          var tr = flag.closest('tr');
          var inputs = tr.querySelectorAll('input[type="text"]');
          var inputsFilled = true;
          
          inputs.forEach(function(input) {
            if (input.value !== '') {
              values[input.id] = input.value;
            } else {
              allFieldsFilled = false;
              inputsFilled = false;
            }
          });
      
          if (inputsFilled) {
            flagSelected = true;
          } else if (!errorFound) {
            flagSelected = false;
            alert('Please fill all the input fields before submitting.');
            errorFound = true;
          }
        });

     
        
        if (values.q && values.r && flagSelected && Object.keys(values).length === 2 && !errorFound) {
          alert('Correct');
        } else if (!flagSelected && !errorFound) {
          alert('Please select at least one flag before submitting.');
          errorFound = true;
        } 
      
        for (var key in values) {
          if (validFields.includes(key) && (values[key] < 1 || values[key] > 100) && !errorFound) {
            alert('You cannot input marks lower than 0 or higher than 100.');
            errorFound = true;
          } else if ((key === 'g' || key === 'i') && values[key] != 10 && !errorFound) {
            alert('The mark(s) entered is invalid. Make sure that all values are labelled in green or orange');
            errorFound = true;
          } else if (invalidFields.includes(key) && values[key] != 20 && !errorFound) {
            alert('The mark(s) entered is invalid. Make sure that all values are labelled in green or orange');
            errorFound = true;
          } else if (isNaN(values[key]) && !errorFound) {
            alert('The mark(s) entered is invalid. Make sure that all values are labelled in green or orange');
            errorFound = true;
          }
          
        }
      
        if (!errorFound) {
          form.setAttribute("method", "post");
          form.setAttribute("action", "phprova.php");
      
          for (var key in values
      ) {
            var inputElem = document.createElement("input");
            inputElem.setAttribute("type", "hidden");
            inputElem.setAttribute("name", key);
            inputElem.setAttribute("value", values[key]);
            form.appendChild(inputElem);
          }
      
          document.body.appendChild(form);
          form.submit();
          return true;
        } else {
          return false;
        }
      }
      
      
      
      

    
    

    