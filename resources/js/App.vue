<template>
    <div id="app">
        <nav>
        <ul>
            <li><router-link to="/">Home</router-link></li>
            <li><router-link to="/Students">Students</router-link></li>
        </ul>
        </nav>
        <router-view></router-view>
    </div>
</template>

<style scoped>
    nav {
        margin-bottom: 20px;
    }
    ul {
        list-style: none;
        padding: 0;
    }
    li {
        display: inline;
        margin-right: 10px;
    }
    a {
        text-decoration: none;
        color: #5e60df;
    }
    a.router-link-exact-active {
        font-weight: bold;
    }
</style>