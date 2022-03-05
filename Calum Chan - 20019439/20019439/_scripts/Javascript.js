const btn = document.getElementById('checkbtn'); //gets input of button
btn.addEventListener('click', checkCard); // when clicked goes into checkCard function

function checkCard(){
  //  event.preventDefault();
	const creditCard = document.getElementById('card').value; //gets card value from the form
    const patt1 = /^(?:5[1-5][0-9]{14})$/; //is the pattern which mastercard creditcards follow
	if(creditCard.match(patt1)) { //checks whether the card value is in line with a mastercard creditcard number
        const cvvNumber = document.getElementById('cvv').value; 
        const cvvPat = /^([0-9]{3,4})$/; //checks if cvv contains 3 or 4 digits between 0 and 9
        if(cvvNumber.match(cvvPat)) { 
            const month = document.getElementById('expiryMonth').value;
            const year = document.getElementById('expiryYear').value;
            const currentMonth = new Date().getMonth + 1; //gets current month + 1
            const currentYear = new Date().getFullYear(); //gets current year
            if (currentYear > year || (currentYear == year && currentMonth >= month)) { //calculates if inputted year is smaller than current year or if current year is equal to inputted year &  inputted month is smaller or same as current month 
                alert('Expiry date is invalid!');
                document.getElementById('h').value = -1; //tells indicator that card is incorrect
            } 
            else {
                alert('pass');
                document.getElementById('h').value = 1; //tells indicator that card is valid
            }
        }
        else {
            alert('CVV is invalid!');
            document.getElementById('h').value = -1;
        }
	}
	else {
         alert('Credit card information is invalid!');
         document.getElementById('h').value = -1;
	}
}