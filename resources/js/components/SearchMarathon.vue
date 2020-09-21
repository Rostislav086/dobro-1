<template>
  <div>
    <div class="my tabs-content">
      <div class="marathon-search">
        <input class="marathon-search__check" type="radio" id="allMarathon" />
        <label class="marathon-check__label" for="allMarathon">Поиск марафона</label>

        <div>
          <label class="marathon-search__label" for="searchMarathon">Поиск марафона</label>
          <input
            class="marathon-search__input"
            type="text"
            id="searchMarathon"
            placeholder="Введите имя пользователя, название марафона или его описание"
          />
        </div>
      </div>
      <div class="my-marathon">
        <div class="my-marathon__block" v-for="marathon in myMarathons" :key="marathon.id">
          <div class="item">
            <div class="item-top">
              <p class="item-top__title">{{marathon.title}}</p>
              <p class="item-top__date">{{marathon.date}}</p>
            </div>
            <div class="item-bottom">
              <p class="item-bottom__money">
                Собрано:
                <br />
                {{marathon.allMoney}} / {{marathon.getMoney}}
              </p>
              <p class="item-bottom__percent">{{marathon.percent}}%</p>
            </div>
          </div>
          <p class="item-description">Вы пожертвовали 4 000 руб.</p>
          <a href="#" class="item-button">Помочь</a>
          <a href="#" class="item-img__share">
            <img src="#" alt="share" />
          </a>
        </div>
        <!-- /.my-marathon__block -->
      </div>
      <!-- /.my-marathon -->
    </div>
  </div>
</template>

<script>
import { Swiper, SwiperSlide, directive } from "vue-awesome-swiper";
import "swiper/css/swiper.css";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  directives: {
    directive,
  },
  data() {
    return {
      myMarathons: [
        {
          id: 1,
          title: "Защитим лес вместе",
          date: "20 марта 2020г.",
          allMoney: "700 000руб",
          getMoney: "130 000руб",
          percent: "68",
        },
        {
          id: 2,
          title: "Защитим лес вместе",
          date: "20 марта 2020г.",
          allMoney: "700 000руб",
          getMoney: "130 000руб",
          percent: "68",
        },
        {
          id: 2,
          title: "Защитим лес вместе",
          date: "20 марта 2020г.",
          allMoney: "700 000руб",
          getMoney: "130 000руб",
          percent: "68",
        },
      ],
      swiperOptions: {
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      },
    };
  },
};
</script>