<h1>{$Contact->full_name}'s HLA Information</h1>

<a href="index.php?module=Contacts&action=DetailView&record={$Contact->id}">Back to Patient</a>

<ul>
    <li><a href="index.php?module=comite_PersonalHealthHistory&action=DetailView&record={$PersonalHealthHistory->id}">Personal Health History</a></li>
    <li><a href="index.php?module=comite_NutritionExercise&action=DetailView&record={$NutritionExercise->id}">Nutrition & Exercise</a></li>
    <li><a href="index.php?module=comite_FamilyHealthHistory&action=DetailView&record={$FamilyHealthHistory->id}">Family's Health History</a></li>
    <li><a href="index.php?module=comite_LifeStyle&action=DetailView&record={$LifeStyle->id}">Lifestyle</a></li>
<!--    <li><a href="index.php?module=comite_PharmacyLog&action=DetailView&record={$PharmacyLog->id}">Pharmacy Log</a></li> -->
</ul>