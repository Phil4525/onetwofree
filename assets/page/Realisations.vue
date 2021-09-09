<template>
  <div>
    <h2 class="text-center mb-4">{ 3,4 de nos travaux en cours }</h2>
    <b-row class="mb-5">
      <b-col class="clients" data-aos="fade-right" aos-init aos-animate>
        <button type="button" class="btn" @click="showModal">
          <img
            @click="isModalVisible5 = true"
            src="../../public/assets/image/baio.png"
            alt="photo production pour client"
          />
        </button>
        <Modal v-show="isModalVisible5" @close="isModalVisible5 = false">
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
        <p>Création site</p>
      </b-col>
      <b-col class="clients" data-aos="fade-left" aos-init aos-animate>
        <button type="button" class="btn" @click="showModal">
          <img
            @click="isModalVisible6 = true"
            src="../../public/assets/image/win.png"
            alt="photo production pour client"
          />
        </button>
        <Modal v-show="isModalVisible6" @close="isModalVisible6 = false">
          <template v-slot:header>
            <h1>Le titre de ma page</h1>
          </template>
          <template v-slot:body>
            <p>Refonte identité visuelle, SEO, gestion des réseaux sociaux</p>
          </template>
          <template v-slot:footer>
            <p>Ici les infos de contact</p>
          </template>
        </Modal>

        <p>Recommandation stratégique</p>
      </b-col>
      <b-col class="clients" data-aos="fade-right" aos-init aos-animate>
        <button type="button" class="btn" @click="showModal">
          <img
            @click="isModalVisible8 = true"
            src="../../public/assets/image/momobilier.jpg"
            alt="photo production pour le client"
          />
        </button>
        <Modal v-show="isModalVisible8" @close="isModalVisible8 = false">
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
        <p>Refonte site</p>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import Modal from "../components/Modal";
import AOS from "aos";
import "aos/dist/aos.css";

export default {
  components: {
    Modal,
  },
  created() {
    AOS.init();
  },
  data() {
    return {
      isModalVisible1: false,
      isModalVisible2: false,
      isModalVisible3: false,
      isModalVisible4: false,
      isModalVisible5: false,
      isModalVisible6: false,
      isModalVisible7: false,
      isModalVisible8: false,
    };
  },
  methods: {
    showModal() {
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
    },
  },
};
</script>
<style scoped>
img {
  width: 450px;
}
</style>