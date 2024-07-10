const routes = [
	{
		path: '/',
		name: 'Home',
		component: () => import(/* webpackChunkName: "home" */ './components/Home.vue')
	},
	{
		path: '/Students',
		name: 'Students',
		component: () => import(/* webpackChunkName: "students" */ './components/Students.vue')
	},
];
export default routes;
