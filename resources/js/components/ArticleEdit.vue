<template>
  <div class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-extrabold mb-6 text-blue-600 animate-fade-in">
      Modifier l'article
    </h1>
    <form @submit.prevent="updateArticle">
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Titre</label>
        <input type="text" v-model="title" class="form-input mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 shadow-sm transition-shadow duration-300" required>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Catégorie</label>
        <input type="text" v-model="category" class="form-input mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 shadow-sm transition-shadow duration-300" required>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Contenu</label>
        <textarea v-model="content" class="form-textarea mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 shadow-sm transition-shadow duration-300" required></textarea>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Image</label>
        <input type="file" @change="handleFileUpload" class="form-input mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 shadow-sm transition-shadow duration-300">
      </div>
      <button type="submit" class="btn btn-primary bg-gradient-to-r from-blue-400 to-blue-600 hover:from-blue-600 hover:to-blue-800 transition duration-300 ease-in-out transform hover:-translate-y-1">
        Mettre à jour
      </button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';

export default {
  name: 'ArticleEdit',
  setup() {
    const route = useRoute();
    const router = useRouter();
    const title = ref('');
    const category = ref('');
    const content = ref('');
    const image = ref(null);

    const fetchArticle = async () => {
      try {
        const response = await axios.get(`/api/articles/${route.params.id}`);
        title.value = response.data.title;
        category.value = response.data.category;
        content.value = response.data.content;
        console.log('Fetched article data:', response.data);
      } catch (error) {
        console.error('Error fetching article:', error);
      }
    };

    const updateArticle = async () => {
      const formData = new FormData();
      formData.append('title', title.value);
      formData.append('category', category.value);
      formData.append('content', content.value);
      if (image.value) {
        formData.append('image', image.value);
      }

      console.log('Sending update request with data:', {
        title: title.value,
        category: category.value,
        content: content.value,
        image: image.value,
      });

      try {
        const response = await axios.patch(`/api/articles/${route.params.id}`, formData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        });
        console.log('Update successful:', response.data);
        router.push('/articles');
      } catch (error) {
        console.error('Error updating article:', error.response ? error.response.data : error);
      }
    };

    const handleFileUpload = (event) => {
      image.value = event.target.files[0];
      console.log('File uploaded:', image.value);
    };

    onMounted(fetchArticle);

    return {
      title,
      category,
      content,
      image,
      updateArticle,
      handleFileUpload
    };
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

.form-input, .form-textarea {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.form-input:focus, .form-textarea:focus {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.btn {
  padding: 10px 20px;
  color: white;
  border-radius: 8px;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}

.btn:hover {
  background: #2779bd;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
</style>
