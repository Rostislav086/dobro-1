<template>
  <main class="main">
    <div class="container main-container">
      <div class="user">
        <div class="user-avatar"></div>
        <p class="user-name">Сергей Постолов</p>
        <p class="user-desription">Щедрый меценат</p>
        <div class="user-info">тут должна быть инфа</div>
        <p class="user-support">Написать в поддержку</p>
      </div>
      <!-- /.user -->
      <div class="content">
        <div class="tabs">
          <input
            class="tabs-marathon__my"
            type="radio"
            name="tabs-marathon"
            id="tab-btn-1"
            value
            checked
          />
          <label class="tabs-btn__title" for="tab-btn-1">Мои марафоны</label>
          <input
            class="tabs-marathon__search"
            type="radio"
            name="tabs-marathon"
            id="tab-btn-2"
            value
          />
          <label class="tabs-btn__title" for="tab-btn-2">Найти марафоны</label>
          <MyMarathon class="my tabs-content" id="tabs-content__1"></MyMarathon>
          <SearchMarathon class="search tabs-content" id="tabs-content__2"></SearchMarathon>
        </div>
        <!-- /.tabs -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container main-container -->
  </main>
</template>

<script>
import MyMarathon from "../js/components/MyMarathon.vue";
import SearchMarathon from "../js/components/SearchMarathon.vue";

export default {
  components: {
    MyMarathon,
    SearchMarathon,
  },
  // directives: {
  //     directive
  // },
};
</script>
<style lang="scss"></style>
