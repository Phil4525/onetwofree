<template>
  <div>
    <b-navbar toggleable="" type="dark" variant="info">
      <b-navbar-brand href="#">
        <router-link to="/accueil" custom v-slot="{ href, navigate, isActive }">
          <img
            class="logo"
            src="../../public/assets/image/svg/oneTwoFreeNavJ.svg"
            alt="Nom de l'agence"
            :active="isActive"
            :href="href"
            @click="navigate"
          />
        </router-link>
        <img
          src="../../public/assets/image/svg/signatNavBlanc.svg"
          alt="slogan de l'agence"
          class="slogan"
        />
      </b-navbar-brand>
      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="liens">
          <router-link
            to="/agence"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <b-nav-item :active="isActive" :href="href" @click="navigate"
              >{ l'Agence }</b-nav-item
            >
          </router-link>

          <router-link
            to="/talent"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <b-nav-item :active="isActive" :href="href" @click="navigate"
              >Talents { }</b-nav-item
            >
          </router-link>

          <router-link to="/works" custom v-slot="{ href, navigate, isActive }">
            <b-nav-item :active="isActive" :href="href" @click="navigate"
              >Works</b-nav-item
            >
          </router-link>

          <router-link
            to="/contact"
            custom
            v-slot="{ href, navigate, isActive }"
          >
            <b-nav-item :active="isActive" :href="href" @click="navigate"
              >Contact</b-nav-item
            >
          </router-link>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>

    <!-- route outlet -->
    <!-- component matched by the route will render here -->
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "NavbarPrincipal",
  props: {},
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.logo {
  width: 300px;
}
.slogan {
  display: block;
  width: 250px;
  position: absolute;
  top: 65px;
  left: 20px;
}
.liens {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  font-weight: bold;
}
</style>

<!--
  L'attribut 'toggleable=""' permet de savoir quand le menu burger apparait ou pas, exemple: toggleable="lg",
  servira à a masquer le menu burger quand la taille de l'écran atteindra le breakpoint "large"
-->