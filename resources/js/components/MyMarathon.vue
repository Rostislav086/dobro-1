<template>
    <div>
        <div class="my tabs-content" id="tabs-content__1">
            <div class="my-top">
                <a href="#" class="my-top__link">Активные</a>
                <a href="#" class="my-top__link">Архив</a>
                <a href="#" class="my-top__link top-link__btn"
                    >Создать марафор</a
                >
            </div>
            <!-- /.my-top -->
            <div class="my-news">
                <swiper ref="mySwiper" :options="swiperOptions">
                    <swiper-slide>
                        <div class="news">
                            <p class="news-title">
                                *ИМЯ* внёс 10 000 р. на счёт вашего марафона
                                “Сохраним лес”
                            </p>
                            <a href="#" class="news-description">Подробнее</a>
                            <a href="#" class="news-display">Скрыть</a>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="news">
                            <p class="news-title">
                                *ИМЯ* внёс 10 000 р. на счёт вашего марафона
                                “Сохраним лес”
                            </p>
                            <a href="#" class="news-description">Подробнее</a>
                            <a href="#" class="news-display">Скрыть</a>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="news">
                            <p class="news-title">
                                *ИМЯ* внёс 10 000 р. на счёт вашего марафона
                                “Сохраним лес”
                            </p>
                            <a href="#" class="news-description">Подробнее</a>
                            <a href="#" class="news-display">Скрыть</a>
                        </div>
                    </swiper-slide>

                    <div class="swiper-pagination" slot="pagination"></div>
                </swiper>
            </div>
            <!-- /.my-news -->
            <div class="my-marathon">
                <div
                    class="my-marathon__block"
                    v-for="fond in fonds"
                    :key="fond.id"
                >
                    <div class="item">
                        <div class="item-top">
                            <p class="item-top__title">{{ fond.name }}</p>
                            <p class="item-top__description">
                                {{ fond.type_prefix }}
                            </p>
                        </div>
                        <div class="item-bottom">
                            <p class="item-bottom__money">
                                Собрано:
                                <br />
                                {{ fond.price }} руб.
                            </p>
                            <p class="item-bottom__percent"></p>
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
import { Swiper, SwiperSlide } from "vue-awesome-swiper";
import "swiper/css/swiper.css";

export default {
    components: {
        Swiper,
        SwiperSlide
    },
    data() {
        return {
            URL: "http://homestead.dobro/api/fonds",
            fonds: [],
            swiperOptions: {
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }
            }
        };
    },
    methods: {
        getFonds() {
            axios.get(this.URL).then(response => {
                this.fonds = response.data;
            });
        }
    },
    mounted() {
        this.getFonds();
    }
};
</script>
