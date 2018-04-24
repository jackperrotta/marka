<script>

function showCustomer(str) {
    if (str.length === 0) {
        document.getElementById("results").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        // readyState four means the request is complete.
        // status 200 means no errors on the page
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        // grab some variables
        responseText = xmlhttp.responseText;
        indexOfComma = responseText.indexOf(",");

        // a string length greater that zero means that there was *something*
        if (responseText.length > 0)
            {
            // If no comma was found, then there must have been exactly one match
            if ((indexOfComma === -1) )
                    {
                    //bingo!  Exactly one match
                    document.getElementById("results").innerHTML = responseText;
                    // document.getElementById("custname").value = responseText;
                    }
                    else
                    {
                    //more than one response, let's show them all
                    //i'd like to show some line breaks instead of commas
                    var newResponseText = responseText.replace(/,/g,"<tr><td>",/:/g,"</td></tr>");
                    document.getElementById("results").innerHTML = newResponseText;
                    }
            }
        }
    };
    xmlhttp.open("GET", "services/customerLookup.php?q=" + str, true);
    xmlhttp.send();
    }
}

window.onload = function(){
    document.getElementById('custname').onkeyup = function(){
        var custname =  document.getElementById('custname').value;
        showCustomer(custname);
    };
};

</script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <form>
        <label for="custname">Customer Lookup:</label> <input type="text" id="custname" style="width:80%;">
      </form>
    </div>
  </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <div class="table-responsive w-100">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
        </tr>
      </thead>
      <tbody id="results">

      </tbody>
    </table>
  </div>
</main>
