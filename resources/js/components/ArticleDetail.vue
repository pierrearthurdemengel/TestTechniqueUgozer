<template>
  <div class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
    <div class="overflow-hidden rounded-lg shadow-md">
      <img 
        v-if="article.image_path" 
        :src="`/storage/${article.image_path}`" 
        alt="Image de l'article" 
        class="article-image w-full object-cover transition-transform duration-500 ease-in-out"
        @load="imageLoaded"
      >
    </div>
    <div v-if="imageIsLoaded" class="animate-fade-in">
      <h1 class="text-4xl font-extrabold mb-4 text-blue-600 mt-6 animate-fade-down">{{ article.title }}</h1>
      <p class="text-lg font-semibold text-gray-700 mb-2">{{ article.category }}</p>
      <div class="text-base text-gray-800 leading-7 animate-fade-down-delayed" v-html="formattedContent"></div>
      <router-link 
        to="/articles" 
        class="btn-back mt-6 inline-block px-6 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out"
      >
        Retour à la liste des articles
      </router-link>
    </div>
  </div>
</template>



<script>
import axios from 'axios';
import { ref, onMounted, computed } from 'vue';
import { useRoute } from 'vue-router';

export default {
  name: 'ArticleDetail',
  setup() {
    const route = useRoute();
    const article = ref({});
    const imageIsLoaded = ref(false);

    const fetchArticle = async () => {
      try {
        const response = await axios.get(`/api/articles/${route.params.id}`);
        article.value = response.data;
      } catch (error) {
        console.error('Erreur lors de la récupération de l\'article:', error);
      }
    };

    const formattedContent = computed(() => {
      if (!article.value.content) {
        return '';
      }
      return article.value.content.replace(/\n/g, '<br>');
    });

    const imageLoaded = () => {
      imageIsLoaded.value = true;
    };

    onMounted(fetchArticle);

    return { article, formattedContent, imageLoaded, imageIsLoaded };
  },
};
</script>



<style scoped>
.container {
  background: #f9fafb;
  border-radius: 10px;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
  padding: 2rem;
  transition: transform 0.5s ease;
}

.container:hover {
  transform: scale(1.02);
}

h1 {
  font-family: 'Montserrat', sans-serif;
}

.article-image {
  max-height: 400px;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.article-image:hover {
  transform: scale(1.05);
}

.btn-back {
  display: inline-block;
  padding: 0.75rem 1.5rem;
  background-color: #3182ce;
  color: #fff;
  border-radius: 0.375rem;
  text-decoration: none;
  text-align: center;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-back:hover {
  background-color: #2b6cb0;
  transform: translateY(-3px);
}

.animate-fade-in {
  animation: fade-in 1s ease-out forwards;
}

@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fade-down {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fade-down-delayed {
  from {
    opacity: 0;
    transform: translateY(-30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

