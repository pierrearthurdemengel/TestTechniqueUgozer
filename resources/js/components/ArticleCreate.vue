<template>
  <div class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Créer un nouvel article</h1>
    <form @submit.prevent="createArticle" class="space-y-4">
      <div class="form-group">
        <label class="block text-gray-700 font-semibold transition-transform transform hover:scale-105 duration-300 ease-in-out">Titre</label>
        <input type="text" v-model="title" class="form-input mt-1 block w-full border-blue-400 focus:border-blue-600 rounded-md shadow-sm transition duration-500 ease-in-out transform hover:scale-105" required>
      </div>
      <div class="form-group">
        <label class="block text-gray-700 font-semibold transition-transform transform hover:scale-105 duration-300 ease-in-out">Catégorie</label>
        <input type="text" v-model="category" class="form-input mt-1 block w-full border-blue-400 focus:border-blue-600 rounded-md shadow-sm transition duration-500 ease-in-out transform hover:scale-105" required>
      </div>
      <div class="form-group">
        <label class="block text-gray-700 font-semibold transition-transform transform hover:scale-105 duration-300 ease-in-out">Contenu</label>
        <textarea v-model="content" class="form-textarea mt-1 block w-full border-blue-400 focus:border-blue-600 rounded-md shadow-sm transition duration-500 ease-in-out transform hover:scale-105" required></textarea>
      </div>
      <div class="form-group">
        <label class="block text-gray-700 font-semibold transition-transform transform hover:scale-105 duration-300 ease-in-out">Image</label>
        <input type="file" @change="handleFileUpload" class="form-input mt-1 block w-full border-blue-400 focus:border-blue-600 rounded-md shadow-sm transition duration-500 ease-in-out transform hover:scale-105">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary transform transition-transform hover:scale-110 focus:outline-none focus:ring-4 focus:ring-blue-300 duration-300 ease-in-out">Créer</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'ArticleCreate',
  data() {
    return {
      title: '',
      category: '',
      content: '',
      image: null,
    };
  },
  methods: {
    async createArticle() {
      const formData = new FormData();
      formData.append('title', this.title);
      formData.append('category', this.category);
      formData.append('content', this.content);
      if (this.image) {
        formData.append('image', this.image);
      }

      try {
        await axios.post('/api/articles', formData);
        this.$router.push('/articles');
      } catch (error) {
        console.error('Error creating article:', error);
      }
    },
    handleFileUpload(event) {
      this.image = event.target.files[0];
    },
  },
};
</script>

<style scoped>
.container {
  background: #f9fafb;
  border-radius: 10px;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
  padding: 2rem;
}

h1 {
  font-family: 'Montserrat', sans-serif;
}

.form-input,
.form-textarea {
  border: 2px solid transparent;
  padding: 0.75rem;
  transition: border 0.3s ease;
}

.form-input:focus,
.form-textarea:focus {
  border: 2px solid #3b82f6;
  outline: none;
}

.btn {
  background-color: #3b82f6;
  color: #fff;
  padding: 0.75rem 1.5rem;
  border-radius: 0.375rem;
  transition: transform 0.3s ease, background-color 0.3s ease;
  cursor: pointer;
}

.btn:hover {
  background-color: #2563eb;
  transform: scale(1.05);
}

.btn:focus {
  outline: none;
  box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.5);
}
</style>