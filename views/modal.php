<!--Formato de modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body container">
        <section class="row">
          <div class="col">
            <img id="modal-img" src="" alt="Aqui va una imagen" width="230px" height="280px"/>
          </div>
          <div class="col">
            <h5 id="modal-tittle">Hamburgruesa</h5>
            <p id="modal-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            <div class="total_infor">
              <b class="total" id="modal-price">$150</b>  
              <div class="count-selector" align="center">
                <span id="add-btn" onclick="add()"><b>+</b></span>
                <p contenteditable="false" id="modal-cantidad">1</p>
                <span id="subt-btn" onclick="subtract()"><b>-</b></span>
              </div>
            </div>   
          </div>
        </section>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success order" data-bs-dismiss="modal">Pedir Ahora</button>
        <button type="button" class="btn btn-success add-car" onclick="addToCart()" data-bs-dismiss="modal">Añadir al carrito</button>
      </div>
      </div>
      </div>
    </div>
</div>