<template>
    <header class="header">
        <div class="container header-container">
            <a href="#" class="header-logo">
                <img src="/img/logo.png" alt="logo dobro" class="logo" />
            </a>
            <nav class="header-nav">
                <a href="#" class="header-nav__link">Контакты</a>
                <a href="#" class="header-nav__link">О проекте</a>
            </nav>
            <!-- /.header-nav -->
        </div>
        <!-- /.container header-container -->
    </header>
</template>

<script>
export default {
    data() {
        return {
            logo: "/img/logo.png"
        };
    }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
// @import "../sass/_header.scss";
</style>
