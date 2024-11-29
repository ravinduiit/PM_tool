<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Team Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100">
  <!-- Container -->
  <div class="container mx-auto py-8 px-4">
    
    <!-- Create Team Section -->
    <div class="bg-white p-8 rounded-lg shadow-2xl">
      <div class="flex items-center space-x-8">
        <!-- Illustration -->
        <div class="w-1/2">
          <img src="{{ asset('images/teamsImg.png') }}" class="rounded-lg" alt="Project 5">
        </div>

        <!-- Form -->
        <div class="w-1/2">
          <h2 class="text-2xl font-bold mb-4">Team Title</h2>
          <form>
            <div class="mb-4">
              <label for="team_title" class="block text-gray-700 font-medium">Team Title</label>
              <input
                type="text"
                id="team_title"
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-400"
                placeholder="Enter team title"
              />
            </div>
            <div class="mb-4">
              <label for="add_people" class="block text-gray-700 font-medium">Add People</label>
              <input
                type="text"
                id="add_people"
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-400"
                placeholder="Enter emails or names"
              />
            </div>
            <div class="flex items-center mb-4">
              <input
                type="checkbox"
                id="membership_controls"
                class="h-4 w-4 text-blue-500 focus:ring focus:ring-blue-400 rounded"
              />
              <label for="membership_controls" class="ml-2 text-gray-700">Anyone can join this team without approval</label>
            </div>
            <button
              type="submit"
              class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-400"
            >
              Create Team
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Existing Teams Section -->
    <h3 class="text-xl font-bold my-8">Existing Teams</h3>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
      <!-- Team Card -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h4 class="text-lg font-bold mb-2">UI Teams</h4>
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-yellow-400 text-white flex items-center justify-center rounded-full">G</div>
          <div class="w-8 h-8 bg-blue-400 text-white flex items-center justify-center rounded-full">M</div>
          <div class="w-8 h-8 bg-green-400 text-white flex items-center justify-center rounded-full">V</div>
          <div class="text-gray-500 text-sm">+2</div>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h4 class="text-lg font-bold mb-2">Backend Teams</h4>
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-yellow-400 text-white flex items-center justify-center rounded-full">G</div>
          <div class="w-8 h-8 bg-blue-400 text-white flex items-center justify-center rounded-full">M</div>
          <div class="w-8 h-8 bg-green-400 text-white flex items-center justify-center rounded-full">V</div>
          <div class="text-gray-500 text-sm">+2</div>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h4 class="text-lg font-bold mb-2">Frontend Teams</h4>
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-yellow-400 text-white flex items-center justify-center rounded-full">G</div>
          <div class="w-8 h-8 bg-blue-400 text-white flex items-center justify-center rounded-full">M</div>
          <div class="w-8 h-8 bg-green-400 text-white flex items-center justify-center rounded-full">V</div>
          <div class="text-gray-500 text-sm">+2</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
