<template>
  <b-container fluid>
    <SlideClient />

    <div class="expertises text-center">
      <h1 class="text-center titre">
        <span class="point">.</span><span class="accolade">{</span> One Two
        Works
        <span class="accolade"> }</span>
      </h1>
      <img
        class="titreWorks"
        src="../../public/assets/image/svg/oneTwoTitreShotsB.svg"
        alt="titre Works"
      />
      <p>
        Les différentes étapes et solutions que nous vous proposons sont les
        suivantes : Analyse de vos besoins et de votre activité, Proposition de
        solutions Sur-Mesure adaptées à votre demande.
      </p>
      <p>
        Chaque site est unique ! Nous vous apporterons conseils et idées en
        fonction de vos objectifs et réaliserons un site à votre image.
      </p>
      <div class="accordion" role="tablist">
        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-1" role="tab">
            <b-button block v-b-toggle.accordion-1 variant="info"
              ><H2>{ 2,3 de NOS EXPERTISES }</H2></b-button
            >
          </b-card-header>
          <b-collapse
            id="accordion-1"
            visible
            accordion="my-accordion"
            role="tabpanel"
          >
            <b-card-body>
              <b-card-text
                >I start opened because <code>visible</code> is
                <code>true</code></b-card-text
              >
              <b-card-text>
                <b-row>
                  <b-col>
                    <router-link
                      to="/DeveloppementCode"
                      custom
                      v-slot="{ href, navigate, isActive }"
                    >
                      <a
                        class="works"
                        :active="isActive"
                        :href="href"
                        @click="navigate"
                      >
                        <H3>DEVELOPPEMENT et CODE :</H3>

                        <p>
                          <span>{</span>Création technique de votre site
                          internet)<span>}</span>
                        </p>

                        <!-- Création et refonte de site Web /
              SiteEcommerce Création site Vitrine (Artisans, Pro , etc.. )
              Création Site E-commerce -->
                      </a>
                    </router-link>
                    <router-link
                      to="/CreationRefonte"
                      custom
                      v-slot="{ href, navigate, isActive }"
                    >
                      <a
                        class="works"
                        :active="isActive"
                        :href="href"
                        @click="navigate"
                      >
                        Création et refonte de site Web
                      </a>
                    </router-link>

                    <router-link
                      to="/SiteEcommerce"
                      custom
                      v-slot="{ href, navigate, isActive }"
                    >
                      <a
                        class="works"
                        :active="isActive"
                        :href="href"
                        @click="navigate"
                      >
                        Site e-commerce
                      </a>
                    </router-link>
                  </b-col>
                  <b-col>
                    <h3>STRATEGIE / CREATION CONTENU ET VISUELLE</h3>
                    <router-link
                      to="/IdentiteMarque"
                      custom
                      v-slot="{ href, navigate, isActive }"
                    >
                      <a
                        class="works"
                        :active="isActive"
                        :href="href"
                        @click="navigate"
                      >
                        Identité de marque
                      </a>
                    </router-link>

                    <router-link
                      to="/StrategieContent"
                      custom
                      v-slot="{ href, navigate, isActive }"
                    >
                      <a
                        class="works"
                        :active="isActive"
                        :href="href"
                        @click="navigate"
                      >
                        Stratégie content : Rédaction Web
                        <p></p>
                      </a>
                    </router-link>

                    <router-link
                      to="/CreationVisuelle"
                      custom
                      v-slot="{ href, navigate, isActive }"
                    >
                      <a
                        class="works"
                        :active="isActive"
                        :href="href"
                        @click="navigate"
                      >
                        Identité de marque
                        <p>Création visuelle</p>
                        <p>(Conception graphique de votre site Web)</p>
                      </a>
                    </router-link>
                  </b-col>
                  <b-col>
                    <h3>
                      ACCOMPAGNEMENT et TRANSFORMATION DIGITALE / ANIMATION /
                      CREATION COMMUNAUTE
                    </h3>
                    <router-link
                      to="/Reseaux"
                      custom
                      v-slot="{ href, navigate, isActive }"
                    >
                      <a
                        class="works"
                        :active="isActive"
                        :href="href"
                        @click="navigate"
                      >
                        Réseaux sociaux (Promotion et animation du site
                        internet)
                      </a>
                    </router-link>
                    <p>
                      <router-link
                        to="/StratDigitale"
                        custom
                        v-slot="{ href, navigate, isActive }"
                      >
                        <a
                          class="works"
                          :active="isActive"
                          :href="href"
                          @click="navigate"
                        >
                          Stratégie digitale
                        </a>
                      </router-link>
                    </p>
                  </b-col>

                  <span>}</span>
                </b-row>
              </b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>

        <!-- <router-link
        to="/Realisations"
        custom
        v-slot="{ href, navigate, isActive }"
      >
        <a class="works" :active="isActive" :href="href" @click="navigate">
          <h2>{ 3,4 de nos travaux en cours }</h2>
        </a>
      </router-link> -->
        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-1" role="tab">
            <b-button block v-b-toggle.accordion-2 variant="info"
              ><H2>{ 3,4 de NOS TRAVAUX EN COURS }</H2>
            </b-button>
          </b-card-header>
          <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text
                ><router-link
                  to="/Realisations"
                  custom
                  v-slot="{ href, navigate, isActive }"
                >
                  <a
                    class="works"
                    :active="isActive"
                    :href="href"
                    @click="navigate"
                  >
                    <h3>{ NOS REALISATIONS }</h3>
                  </a>
                </router-link>
              </b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>
      </div>
    </div>
  </b-container>
</template>

<script>
import SlideClient from "../components/SlideClient.vue";

export default {
  components: {
    SlideClient,
  },
};
//   export default {
// data() {
//   return {
// //     text: `
// //       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
// //       richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
// //       brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
// //       tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
// //       assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
// //       wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
// //       vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
// //       synth nesciunt you probably haven't heard of them accusamus labore VHS.
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

h1 {
  color: #fbd100;
}
.expertises {
  background-color: #ffffff;
}
.titreWorks {
  width: 450px;
}
span {
  color: #fbd100;
  font-size: 2em;
}

h3 {
  color: #308c99;
}
</style>