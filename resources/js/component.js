import Login from "./pages/auth/login.vue";
import homeSlider from "./pages/admin/homeSlider/index.vue";
import partners from "./pages/admin/partners/index.vue";
import faqSection from "./pages/admin/faqSection/index.vue";
import faq from "./pages/admin/faq/index.vue";
import counters from "./pages/admin/counters/index.vue";
import counterAbout from "./pages/admin/counterAbout/index.vue";
import oneAbout from "./pages/admin/oneAbout/index.vue";
import twoAbout from "./pages/admin/twoAbout/index.vue";
import services from "./pages/admin/services/index.vue";
import projects from "./pages/admin/projects/index.vue";
import setting from "./pages/admin/setting/index.vue";
import articleCategory from "./pages/admin/articleCategory/index.vue";
import articles from "./pages/admin/articles/index.vue";
import articlesQueries from "./pages/admin/articles/indexQueries.vue";
import teams from "./pages/admin/teams/index.vue";
import testimonials from "./pages/admin/testimonials/index.vue";
import Dashboard from "./pages/admin/dashboard.vue";
import serviceFaq from "./pages/admin/serviceFaq/index.vue";
import projectCategory from "./pages/admin/projectCategory/index.vue";
import projectChallengeSolution from "./pages/admin/projectChallengeSolution/index.vue";

function Components (app) {
    app.component(`login`, Login);
    app.component(`home-slider`, homeSlider);
    app.component(`faq`, faq);
    app.component(`dashboard`, Dashboard);
    app.component(`partners`, partners);
    app.component(`faq-section`, faqSection);
    app.component(`counters`, counters);
    app.component(`counter-about`, counterAbout);
    app.component(`services`, services);
    app.component(`setting`, setting);
    app.component(`projects`, projects);
    app.component(`one-about`, oneAbout);
    app.component(`two-about`, twoAbout);
    app.component(`article-category`, articleCategory);
    app.component(`articles`, articles);
    app.component(`articles-queries`, articlesQueries);
    app.component(`service-faq`, serviceFaq);
    app.component(`testimonials`, testimonials);
    app.component(`teams`, teams);
    app.component(`project-category`, projectCategory);
    app.component(`project-challenge-solution`, projectChallengeSolution);
}


export default Components;