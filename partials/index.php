
  <form class="checkForm" action="../RentInfo/DBCheck.php" method="POST">
      <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      
          <div class="modal-dialog modal-lg  " role="document">
            <div class="modal-content ">
              <div class="modal-header  ">
                <h5 class="modal-title " id="exampleModalCenterTitle">Wprowadź swoje dane</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center" >
                <label>Imie </label><br>
                 <input type="text" name="name"><br>
                 <label>Nazwisko:</label><br>
                 <input type="text" name="lname"><br>
                <label>Numer Telefonu:</label><br> 
                <input type="number" name="Phone"><br>
                <label>E-mail:</label><br> 
                <p> <input type="text" name="email"></p>
              <p> <select name="car">
            <option value="camp1">Camp1</option>
            <option value="camp2">Camp2</option>
            <option value="camp3">Camp3</option>
            <option value="limu1">Limo1</option>
            <option value="limu2">Limo2</option>
            <option value="limu3">Limo3</option>
        </select> </p>
        <label for="dataOD">Wybierz datę wypożyczenia:</label><br>
        <input type="date" name="dataOD">
        <br>
        <label for="dataDO">Wybierz datę zwrotu:</label><br>
        <input type="date" name="dataDO">
       
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                <button type="submit" name="submit" class="btn btn-primary">Sprawdź Dosępność</button>
              </div>
            </div>
          </div>
        </div>
    </form>


