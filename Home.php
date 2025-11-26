<?php
// Default message
$message = "Tap a feature to simulate navigation.";

// List of features
$features = [
    "फाइल खोज तथा अनुगमन",
    "गुनासो / सुझाव",
    "हेलो सरकार",
    "ई-हाजिरी",
    "इमेल लग ईन",
    "घर नक्सा पास प्रणाली",
    "अनलाइन घटना दर्ता प्रणाली",
    "दैनिक कार्य असाइनमेन्ट",
    "राष्ट्रिय सञ्चित कोष व्यवस्थापन"
];

// When a button is clicked
if (isset($_GET['feature'])) {
    $clicked = $_GET['feature'];
    $message = "You opened: " . htmlspecialchars($clicked);
}
?>
<!DOCTYPE html>
<html lang="ne">
<head>
    <meta charset="UTF-8">
    <title>शुक्लागण्डकी नगरपालिका</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-4">

    <!-- TOP IMAGE -->
    <div class="w-full mb-4">
        <img src="img/your-image.jpg" alt="Municipality Building" class="w-full rounded-2xl shadow">
    </div>

    <!-- Header -->
    <div class="bg-blue-900 text-white p-4 rounded-2xl mb-4">
        <h1 class="text-xl font-bold">शुक्लागण्डकी नगरपालिका</h1>
        <p class="text-sm opacity-80">तनहुँ जिल्ला,बागमती</p>
    </div>

    <!-- Message -->
    <div class="text-center mb-4 text-blue-700 font-semibold text-lg">
        <?= $message ?>
    </div>

    <!-- Feature Buttons -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php foreach ($features as $f): ?>
            <a href="?feature=<?= urlencode($f) ?>" 
               class="block bg-white p-6 rounded-2xl shadow hover:shadow-lg transition text-center text-lg font-medium">
                <?= $f ?>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Footer Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-white p-3 shadow-inner flex justify-around text-gray-700 text-sm">
        <a href="#" class="hover:text-blue-600">होम</a>
        <a href="#" class="hover:text-blue-600">समाचार</a>
        <a href="#" class="hover:text-blue-600">सेवाहरू</a>
        <a href="#" class="hover:text-blue-600">प्रोफाइल</a>
    </div>

</body>
</html>
