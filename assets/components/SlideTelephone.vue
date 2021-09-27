<template>
  <div class="mx-0 d-none d-md-block">
    <h1 class="dynamic-text-shadow">
      <p class="slogan_blanc">
        <span class="deco">.</span>oneTwoFree<span class="deco">{</span
        ><span class="slogan">C'est le nom.</span>
      </p>
      <p class="slogan">Le téléphone c'est zero six one five</p>
      <p class="slogan">
        one seven zero four three six.<span class="deco">}</span>
      </p>
    </h1>
  </div>
</template>

<script>
export default {
  name: "SlideAlgerie",
};
</script>

<style scoped>
div {
  cursor: default;
}
.dynamic-text-shadow {
  text-shadow: 0.1em 0.1em 0 #265973;
}
.deco {
  color: white;
  font-size: 6rem;
}
h1 {
  text-align: center;
  font-size: 4rem;
  font-weight: 900;
  line-height: 1.1;
  font-family: "FuturaBold";
}
.slogan {
  color: #fbd200;
}
.slogan_blanc {
  color: white;
}
</style>