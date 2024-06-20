<template>
  <div class="container mx-auto mt-8 p-6 bg-gradient-to-r from-gray-100 to-gray-200 shadow-lg rounded-lg animate-fade-in">
    <h1 class="text-3xl font-extrabold mb-6 text-blue-600 animate-slide-in">Liste des articles</h1>
    <router-link to="/articles/create" class="btn btn-primary mb-6 block text-center w-full md:w-auto">Créer un nouvel article</router-link>
    <ul class="space-y-4">
      <li v-for="article in articles" :key="article.id" class="p-4 bg-white rounded-lg shadow-md mb-4 transform transition-transform hover:scale-105 animate-fade-in">
        <h2 class="text-xl font-semibold text-gray-800">{{ article.title }}</h2>
        <p class="text-gray-600 italic">{{ article.category }}</p>
        <p class="mt-2 text-gray-700">{{ truncate(article.content, 150) }}</p>
        <div class="mt-4 flex space-x-4">
          <router-link :to="`/articles/${article.id}`" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">Lire plus</router-link>
          <router-link :to="`/articles/edit/${article.id}`" class="text-yellow-600 hover:text-yellow-800 transition-colors duration-300">Modifier</router-link>
          <button @click="deleteArticle(article.id)" class="text-red-600 hover:text-red-800 transition-colors duration-300">Supprimer</button>
        </div>
      </li>
    </ul>
    <!-- Pagination Controls -->
    <div class="pagination mt-8 flex justify-center items-center space-x-4">
      <button @click="prevPage" :disabled="!pagination.prev_page_url" class="btn px-4 py-2 bg-blue-500 text-white rounded-md">
        Précédent
      </button>
      <span class="text-gray-700">Page {{ pagination.current_page }} sur {{ pagination.last_page }}</span>
      <button @click="nextPage" :disabled="!pagination.next_page_url" class="btn px-4 py-2 bg-blue-500 text-white rounded-md">
        Suivant
      </button>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';

export default {
  name: 'ArticleList',
  setup() {
    const articles = ref([]);
    const pagination = ref({});
    const currentPage = ref(1);
    const router = useRouter();

    const fetchArticles = async (page = 1) => {
      try {
        const response = await axios.get(`/api/articles?page=${page}`);
        articles.value = response.data.data;
        pagination.value = response.data;
      } catch (error) {
        console.error('Erreur lors de la récupération des articles :', error);
      }
    };

    const prevPage = () => {
      if (pagination.value.prev_page_url) {
        currentPage.value--;
        fetchArticles(currentPage.value);
      }
    };

    const nextPage = () => {
      if (pagination.value.next_page_url) {
        currentPage.value++;
        fetchArticles(currentPage.value);
      }
    };

    const deleteArticle = async (id) => {
      if (confirm('Voulez-vous vraiment supprimer cet article?')) {
        try {
          await axios.delete(`/api/articles/${id}`);
          articles.value = articles.value.filter(article => article.id !== id);
        } catch (error) {
          console.error('Erreur lors de la suppression de l\'article :', error);
        }
      }
    };

    const truncate = (text, length) => {
      return text.length > length ? text.substring(0, length) + '...' : text;
    };

    onMounted(() => fetchArticles(currentPage.value));

    return { articles, pagination, prevPage, nextPage, deleteArticle, truncate };
  }
};
</script>

<style scoped>
.container {
  animation: fade-in 1s ease-out forwards;
}

.btn {
  background: linear-gradient(to right, #3490dc, #657ed4);
  padding: 10px 20px;
  color: white;
  border-radius: 8px;
  text-decoration: none;
  display: inline-block;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.btn:hover {
  background: linear-gradient(to right, #2779bd, #5767bd);
  transform: scale(1.05);
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

li {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

li:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.animate-fade-in {
  animation: fade-in 1s ease-out forwards;
}

@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-slide-in {
  animation: slide-in 1s ease-out forwards;
}

@keyframes slide-in {
  from {
    opacity: 0;
    transform: translateX(-10px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
</style>
