<template id="marker2">
  <b-container fluid style="background-color: #308c99">
    <head>
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
    </head>

    <h1 class="text-center text-white">
      <span class="point">.</span><span class="accolade">{</span> Bienvenue
      <span class="accolade"> }</span>
    </h1>
    <div class="responsive">
      <!-- animate__zoomInRight -->
      <img
        class="
          boutbulles
          animate__animated animate__rotateInDownRight animate__delay-2s
        "
        src="../../public/assets/image/bouteillebulles.png"
        alt="bouteille bulles agence"
      />
      <img
        class="mobilebulles animate__animated animate__zoomInLeft"
        src="../../public/assets/image/Champmobilebulles.png"
        alt="mobile bulles agence"
      />
      <img
        class="tablettebulles animate__animated animate__zoomInRight"
        src="../../public/assets/image/Champtablettebulles.png"
        alt="tablette bulles agence"
      />
      <img
        class="ordibulles animate__animated animate__zoomInLeft"
        src="../../public/assets/image/champordibulles.png"
        alt="ordinateur bulles agence"
      />
    </div>

    <div class="text-center">
      <img
        class="welcome"
        src="../../public/assets/image/svg/slideAerobic.svg"
        alt="ordinateur bulles agence"
      />
    </div>
  </b-container>
</template>

<script>
import AOS from "aos";
import "aos/dist/aos.css";

export default {
  created() {
    AOS.init();
  },
};
</script>

<style scoped>
.accolade {
  color: #fbd100;
}
.point {
  color: white;
}
.responsive {
  position: relative;
  height: 560px;
}
.boutbulles {
  position: absolute;
  height: 100px;
  left: 740px;
  top: 0;
  /* transform: rotate(90deg); */
}
.mobilebulles {
  position: absolute;
  transform: translateX(-680px);
  height: 150px;
  top: 16%;
  right: 0;
}
.tablettebulles {
  position: absolute;
  transform: translateX(690px);
  height: 150px;
  top: 41%;
  left: 0;
}
.ordibulles {
  position: absolute;
  transform: translateX(-645px);
  height: 150px;
  top: 67%;
  right: 0;
}
.welcome {
  height: 150px;
}
</style>