<template>
  <div class="buttons-Con">
    <div>
      <button
        data-toggle="modal"
        data-target="#leftModal"
        class="btn btn-primary buttons color-buttons"
      >
        Ver Arrendamientos
      </button>
    </div>
    <div>
      <button
        data-toggle="modal"
        data-target="#rightModal"
        class="btn btn-primary buttons color-buttons"
      >
        Estrena tu auto
      </button>
    </div>
    <!-- Modals -->
    <div
      class="modal fade"
      id="rightModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header header-decorated">
            <h5
              class="modal-title title-modals text-decoarte"
              id="exampleModalLabel"
            >
              Es momento de estrenar tu carro
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div style="margin: 15px">
              <span class="text-decoarte">
                Tenemos las mejores ofertas para ti
              </span>
              <span class="text-decoarte">
                No dejes pasar esta gran oportunidad.
              </span>
              <br />
              <br />
              <span class="text-decoarte">
                Da click en solicitar información y un asesor te apoyará
              </span>
            </div>
          </div>
          <div
            style="justify-content: center; border-top: 0px solid #dee2e6"
            class="modal-footer"
          >
            <button
              type="button"
              class="btn btn-secondary text-decoarte"
              data-dismiss="modal"
            >
              Regresar
            </button>
            <a class="btn color-buttons" type="button" :href="'/sendEmail'"
              >Obtener información</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Second modal -->
    <div
      class="modal fade"
      id="leftModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header header-decorated">
            <h5
              class="modal-title title-modals text-decoarte"
              id="exampleModalLabel"
            >
              ¡¡Cuotas sin interesés!!
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div style="margin: 15px">
              <span class="text-decoarte">
                Conoce nuestras incríbles ofertas y promociones que tenemos para
                ti
              </span>
              <span class="text-decoarte">
                No dejes pasar esta gran oportunidad.
              </span>
              <br />
              <br />
              <span class="text-decoarte">
                ¡Encuentra el carro que siempre quisiste tener!
              </span>
              <br />
              <span class="text-decoarte">
                Da click en solicitar información para un arrendamiento y un
                asesor te apoyará
              </span>
            </div>
          </div>
          <div
            style="justify-content: center; border-top: 0px solid #dee2e6"
            class="modal-footer"
          >
            <button
              type="button"
              class="btn btn-secondary text-decoarte"
              data-dismiss="modal"
            >
              Regresar
            </button>
            <a class="btn color-buttons" type="button" :href="'/sendEmail'"
              >Obtener información</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
