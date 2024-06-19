<template>
  <div class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
    <div class="overflow-hidden rounded-lg shadow-md">
      <img 
        v-if="article.image_path" 
        :src="`/storage/${article.image_path}`" 
        alt="Image de l'article" 
        class="article-image w-full object-cover transition-transform duration-500 ease-in-out"
      >
    </div>
    <h1 class="text-4xl font-extrabold mb-4 text-blue-600 mt-6 animate-fade-in">{{ article.title }}</h1>
    <p class="text-lg font-semibold text-gray-700 mb-2">{{ article.category }}</p>
    <p class="text-base text-gray-800 leading-7 animate-slide-in">{{ article.content }}</p>
  </div>
</template>

<script>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';

export default {
  name: 'ArticleDetail',
  setup() {
    const route = useRoute();
    const article = ref({});

    const fetchArticle = async () => {
      try {
        const response = await axios.get(`/api/articles/${route.params.id}`);
        article.value = response.data;
      } catch (error) {
        console.error('Error fetching article:', error);
      }
    };

    onMounted(fetchArticle);

    return { article };
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

.animate-fade-in {
  animation: fade-in 1s ease-out forwards;
}

.animate-slide-in {
  animation: slide-in 1s ease-out forwards;
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

@keyframes slide-in {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
</style>
