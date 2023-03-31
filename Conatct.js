function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }

  //This will check the validtation that the texfield should be not empty and if the texfield is empty it
  //will alery the user. 