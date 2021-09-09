<template>
  <b-container fluid>
    <SlideClient />
    <!-- <div class="parallax mx-0 d-none d-md-block"></div> -->
    <b-container class="expertises">
      <h1 class="text-center titre">
        <span class="point">.</span><span class="accolade">{</span> One Two
        Works
        <span class="accolade"> }</span>
      </h1>
      <div class="accordion">
        <!-- <img
          src="../../public/assets/image/svg/oneTwoTitreShotsB.svg"
          alt="nos realisations"
        /> -->

        <div class="expertises text-center">
          <p>
            Les différentes étapes et solutions que nous vous proposons sont les
            suivantes : Analyse de vos besoins et de votre activité, Proposition
            de solutions Sur-Mesure adaptées à votre demande.
          </p>
          <p>
            Chaque site est unique ! Nous vous apporterons conseils et idées en
            fonction de vos objectifs et réaliserons un site à votre image.
          </p>
        </div>

        <div>
          <!-- Intranet – Extranet / Outil métier digital Acquisition de trafic /
          Activation Régie & Délégation de talents Formation Webmarketing -->

          <router-link
            to="/WorksTest"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Works v2
            </a>
          </router-link>
          <router-link
            to="/CreationRefonte"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Création et refonte de site Web
            </a>
          </router-link>

          <router-link
            to="/DeveloppementCode"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Développement et Code :
            </a>
          </router-link>

          <router-link
            to="/SiteEcommerce"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Site e-commerce
            </a>
          </router-link>

          <router-link
            to="/IdentiteMarque"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Identité de marque
            </a>
          </router-link>

          <router-link
            to="/StrategieContent"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Stratégie content : Rédaction Web
            </a>
          </router-link>

          <router-link
            to="/CreationVisuelle"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Identité de marque
              <p>Création visuelle</p>
              <p>(Conception graphique de votre site Web)</p>
            </a>
          </router-link>

          <router-link
            to="/Reseaux"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Réseaux sociaux (Promotion et animation du site internet)
            </a>
          </router-link>

          <router-link
            to="/StratDigitale"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a class="works" :active="isActive" :href="href" @click="navigate">
              Stratégie digitale
            </a>
          </router-link>
        </div>

        <router-link
          to="/Realisations"
          custom
          v-slot="{ href, navigate, isActive }"
        >
          <a class="works" :active="isActive" :href="href" @click="navigate">
            <h2>{ 3,4 de nos travaux en cours }</h2>
          </a>
        </router-link>
      </div>

      <!-- <b-row class="mb-5">
        <b-col class="clients" data-aos="fade-left" aos-init aos-animate>
          <button type="button" class="btn" @click="showModal">
            <img
              @click="isModalVisible1 = true"
              src="../../public/assets/image/presentationlesouvenir2.png"
              alt="photo production pour client"
            />
          </button>
          <Modal v-show="isModalVisible1" @close="isModalVisible1 = false">
            <template v-slot:header>
              <h1>Le titre de ma page</h1>
            </template>
            <template v-slot:body>
              <p>Refonte site, Création Charte graphique</p>
            </template>
            <template v-slot:footer>
              <p>Ici les infos de contact</p>
            </template>
          </Modal>
          <p>Identité visuelle</p>
        </b-col>
        <b-col class="clients" data-aos="fade-right" aos-init aos-animate>
          <button type="button" class="btn">
            <img
              @click="isModalVisible2 = true"
              src="../../public/assets/image/presse1.jpg"
              alt="photo production pour client"
            />
          </button>
          <Modal v-show="isModalVisible2" @close="isModalVisible2 = false">
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
          <p>Presse Ecrite</p>
        </b-col>
      </b-row>
      <b-row>
        <b-col class="clients" data-aos="fade-right" aos-init aos-animate>
          <button type="button" class="btn" @click="showModal">
            <img
              @click="isModalVisible3 = true"
              src="../../public/assets/image/abbepierre.png"
              alt="photo production pour client"
            />
          </button>
          <Modal v-show="isModalVisible3" @close="isModalVisible3 = false">
            <template v-slot:header>
              <h1>Le titre de ma page</h1>
            </template>
            <template v-slot:body>
              <p>Création supports visuels</p>
            </template>
            <template v-slot:footer>
              <p>Ici les infos de contact</p>
            </template>
          </Modal>
          <p>Affichage</p>
        </b-col>
        <b-col class="clients" data-aos="fade-left" aos-init aos-animate>
          <button type="button" class="btn" @click="showModal">
            <img
              @click="isModalVisible4 = true"
              src="../../public/assets/image/presse2.jpg"
              alt="photo production pour le client"
            />
          </button>
          <Modal v-show="isModalVisible4" @close="isModalVisible4 = false">
            <template v-slot:header>
              <h1>Le titre de ma page</h1>
            </template>
            <template v-slot:body>
              <p>Création contenus pour la radio</p>
            </template>
            <template v-slot:footer>
              <p>Ici les infos de contact</p>
            </template>
          </Modal>
          <p>Presse Radio</p>
        </b-col>
      </b-row> -->

      <!-- <h2 class="text-center ">{ 3,4 de nos travaux en cours }</h2> -->

      <!-- </section>
      <section class="p-3">
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
                <p>
                  Refonte identité visuelle, SEO, gestion des réseaux sociaux
                </p>
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
      </section> -->
    </b-container>
  </b-container>
</template>

<script>
// import Modal from "../components/Modal";
import AOS from "aos";
import "aos/dist/aos.css";
import SlideClient from "../components/SlideClient.vue";

export default {
  components: {
    // Modal,
    SlideClient,
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
.parallax {
  /* The image used */
  background-image: url("../../public/assets/image/slideoneclients.png");
  /* Set a specific height */
  min-height: 300px;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.expertises {
  background: #ffffff;
}
img {
  width: 150px;
}
.btn {
  display: block;
  margin: 0 auto;
}
.clients img,
p {
  display: block;
  margin: 0 auto;
  text-align: center;
}
h2 {
  color: #308c99;
}
.accolade {
  color: #fbd100;
}
.point {
  color: #308c99;
}
.titre {
  color: #308c99;
}
.works {
  display: block;
}
</style>