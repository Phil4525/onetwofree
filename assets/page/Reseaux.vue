<template>
  <b-container>
    <b-row>
      <h1 class="text-center text-white">
        <span>{</span> Communication / Réseaux /Création de maquette/
        Accompagnement Sur-Mesure
        <span>}</span>
      </h1>
      <h2 class="text-center text-secondary">by B. G</h2>

      <b-row>
        <b-col class="text-white">
          <h3 class="text-center">your SPEECH, YOU and your ID</h3>
          <h4>ACTIVEZ VOS Réseaux</h4>
          <h4>ANIMEZ VOS Réseaux</h4>

          <p>Community management</p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sunt in
            est placeat, atque ullam molestiae impedit dignissimos minima quia
            blanditiis beatae. Beatae odio quisquam recusandae earum error minus
            distinctio!
          </p>
        </b-col>
      </b-row>

      <b-col class="clients" data-aos="fade-left" aos-init aos-animate>
        <button type="button" class="btn" @click="showModal">
          <img
            @click="isModalVisible7 = true"
            class="creation"
            src="../../public/assets/image/colombbus.png"
            alt="photo production pour client"
          />
        </button>
        <Modal v-show="isModalVisible7" @close="isModalVisible7 = false">
          <template v-slot:header>
            <h1>Le titre de ma page</h1>
          </template>
          <template v-slot:body>
            <p>Ici les infos de contact</p>
          </template>
          <template v-slot:footer>
            <p>Ici les infos de contact</p>
          </template>
        </Modal>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
import Modal from "../components/Modal.vue";
export default {
  components: {
    Modal,
  },
};
</script>
<style scoped>
.creation {
  width: 350px;
}
</style>