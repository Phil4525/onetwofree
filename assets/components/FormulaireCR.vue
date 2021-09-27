<template>
  <transition name="modal-fade">
    <div class="">
      <div class="modal" role="dialog">
        <header class="modal-header" id="modalTitle">
          <slot name="header">
            Contact Rapide
            <button type="button" class="close" @click="$emit('close')">
              X
            </button>
          </slot>
        </header>
        <section class="modal-body container" id="modalDescription">
          <slot name="body">
            <div class="formulaire d-flex">
              <form action="#">
                <div class="info">
                  <label for="nom">Votre nom</label>
                  <input type="text" name="nom" class="champs" />
                </div>
                <div class="info">
                  <label for="contact">Votre contact</label>
                  <input type="text" name="contact" class="champs" />
                </div>
                <div class="info">
                  <label for="objet">Objet de votre message</label>
                  <input type="text" name="objet" class="champs" />
                </div>
                <div class="info">
                  <label for="message">Votre message</label>
                  <textarea
                    name="message"
                    id="champ_message"
                    class="champs"
                    cols="25"
                    rows="5"
                  ></textarea>
                </div>
                <div class="info">
                  <label for="envoyer" class="d-none">envoyer</label>
                  <button type="button" name="envoyer" class="envoyer">
                    Envoyer
                  </button>
                </div>
              </form>
            </div>
          </slot>
        </section>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: "FormulaireCR",
};
</script>

<style scoped>
.modal-backdrop {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  /* background-color: #2f8b97ad; */
  display: flex;
  justify-content: center;
  align-items: center;
}
.formulaire {
  justify-content: center;
}
.champs {
  float: right;
  margin-left: 50px;
  background-color: #2f8b97b4;
}
.info {
  margin-bottom: 50px;
}
.envoyer {
  font-size: 1.5rem;
  border-radius: 30%;
}
.modal {
  background: #2f8b97;
  box-shadow: 2px 2px 20px 1px;
  overflow-x: auto;
  display: flex;
  flex-direction: column;
}

.modal-header {
  padding: 15px;
  display: flex;
  border: 0;
}

.modal-header {
  font-size: 30px;
  color: #4aae9b;
  justify-content: center;
}
.modal-body {
  position: relative;
  font-size: 30px;
  align-self: center;
  padding: 20px 10px;
  background-color: #ffffff;
  border-radius: 10%;
}
.close {
  border: none;
  font-size: 30px;
  margin-left: 100px;
  cursor: pointer;
  font-weight: bold;
  color: #4aae9b;
  background: transparent;
}
</style>