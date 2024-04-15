<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> addd</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    
    <script>
        document.getElementById("phone2").addEventListener("keypress", function(event) {
  var key = event.keyCode;
  // Only allow numbers to be entered
  if (key < 48 || key > 57) {
    event.preventDefault();
  }
});
    </script>


    <h1 class="text-center text-3xl font-bold mt-10">إضافة موظف</h1>
    <div class="mt-8 p-6 border border-sky-100 shadow-md min-w-80 max-w-[30rem] mx-auto rounded-md">
        <form class=" mx-auto flex flex-col gap-2" method="POST" action="/newemp">
            @csrf
                <label for="name" class="font-bold">الاسم</label>
                <input required  type="text" class="mb-4 p-2 outline outline-2 rounded-md outline-sky-200 focus:outline-sky-500  " name="name" id="name" placeholder="ادخل الاسم">
            
                <label for="phone" class="font-bold">رقم الهاتف</label>
                <input  class="mb-4 p-2 outline outline-2 rounded-md outline-sky-200 focus:outline-sky-500" name="phone" maxlength="10" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="ادخل رقم الهاتف"/>

                <label for="exampleInputPassword1" class="font-bold">الراتب</label>
                <input required type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" step="0.01" class="mb-4 p-2 outline outline-2 rounded-md outline-sky-200 focus:outline-sky-500" name="salary" placeholder="ادخل الراتب">
            
                <label for="exampleInputPassword1" class="font-bold">العنوان</label>
                <input required type="text" class=" mb-4 p-2 outline outline-2 rounded-md outline-sky-200 focus:outline-sky-500" name="address" placeholder="ادخل عنوان السكن">
                <button type="submit" class="bg-sky-500 p-3 rounded-md text-white font-bold">إضافة</button>
        </form>

    </div>

</body>
</html>