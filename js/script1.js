    function validateFormRegister() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pass= document.getElementById("pass");
    var password = document.getElementById("password").value;
    
    if(name=="" || email=="" || pass=="" || password=="")
    {
        alert('Data tidak boleh kosong');
    }
    else
    {
        return true;
    }
    }

    function validateFormProfile() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var passold = document.getElementById("passold").value;
      var passnew = document.getElementById("passnew").value;
      var password = document.getElementById("password").value;
      
      if(name=="" || email=="" || passold=="" || passnew=="" || password=="")
      {
          alert('Data tidak boleh kosong');
      }
      else
      {
          return true;
      }
    }