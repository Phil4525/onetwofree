<template>
  <b-container class="footer mt-4 py-2">
    <b-row class="d-flex align-items-center">
      <b-col cols="2" class="d-md-block d-none">
        <img
          class="ml-2"
          src="../../public/assets/image/logofooterblanc.png"
          alt="logo de l'agence"
          id="logo"
        />
      </b-col>
      <b-col cols="10" class="coordonnées">
        <b-col>
          <a href="tel:+33777524387">
            <img
              class="d-block mx-auto telephone"
              src="../../public/assets/image/telephoneiconeblanc.png"
              alt="telephone agence"
            />
          </a>
        </b-col>
        <b-col>
          <a href="mailto:onetwofreeagency@gmail.com">
            <img
              src="../../public/assets/image/arobaseblanc.png"
              alt="email agence"
              class="d-block mx-auto mail"
            />
          </a>
        </b-col>
        <b-col>
          <a href="https://goo.gl/maps/qFAWmLiak3weYBH57" target="_blank">
            <img
              src="../../public/assets/image/mapiconeBLANC1.png"
              alt="adresse agence"
              class="mx-auto d-block carte"
            />
          </a>
        </b-col>
        <b-col>
          <a href="https://twitter.com/OneTwoFree20" target="_blank">
            <font-awesome-icon :icon="['fab', 'twitter']" size="2x" />

            <font-awesome-icon icon="twitter"></font-awesome-icon>
          </a>
        </b-col>
        <b-col>
          <a href="https://www.instagram.com/onetwofreeteam/" target="_blank">
            <font-awesome-icon :icon="['fab', 'instagram']" size="2x" />

            <font-awesome-icon icon="intagram"></font-awesome-icon>
          </a>
        </b-col>
        <b-col>
          <a href="#">
            <font-awesome-icon :icon="['fab', 'linkedin']" size="2x" />

            <font-awesome-icon icon="linkedin"></font-awesome-icon>
          </a>
        </b-col>
        <b-col class="d-none d-lg-flex">
          <router-link
            to="/Mentions"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <a
              :active="isActive"
              :href="href"
              @click="navigate"
              class="mentions"
              >Mentions légales</a
            >
          </router-link>
          <!-- <a
            href="http://localhost/soutenance/backend/public/admin"
            class="d-block text-right mt-3 text-white"
            >Zone Admin</a
          > -->
        </b-col>
      </b-col>
      <div class="d-block d-md-none mx-auto">
        <router-link
          to="/Mentions"
          custom
          v-slot="{ href, navigate, isActive }"
        >
          <a :active="isActive" :href="href" @click="navigate" class="mentions"
            >Mentions légales</a
          >
        </router-link>
      </div>
    </b-row>
  </b-container>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style scoped>
.coordonnées {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.footer {
  background-color: #308c99;
}

#logo {
  width: 70px;
}

a,
.coordonnées {
  color: #ffffff;
  text-decoration: none !important;
}

/* b-row > b-col > a {
  /* display: block;
  align-items: center;
} */

.telephone {
  width: 35px;
}
.mail {
  width: 30px;
}
.carte {
  width: 37px;
}

.mentions {
  font-size: 0.8rem;
  align-self: flex-end;
}
</style>