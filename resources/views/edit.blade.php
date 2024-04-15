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
    
    <h1 class="text-center text-3xl font-bold mt-10">تعديل بيانات موظف</h1>
    <div class="mt-8 p-6 border border-sky-100 shadow-md min-w-80 max-w-[30rem] mx-auto rounded-md">
        <form class=" mx-auto flex flex-col gap-2" method="POST" action="/edit/{{$emp->id}}">
            @csrf

                    @if ($errors->any())
                <div class="alert alert-danger">
                        <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <label for="name" class="font-bold">الاسم</label>
                <input type="text" class="mb-4 p-2 outline outline-2 rounded-md outline-sky-200 focus:outline-sky-500  " value={{$emp->name}} name="name" id="name" >
            
                <label for="phone" class="font-bold">رقم الهاتف</label>
              
                <input type="text" class=" mb-4 p-2 outline outline-2 rounded-md outline-sky-200 focus:outline-sky-500" name="phone" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value={{$emp->phone}}  id="phone" placeholder="">
                <label for="exampleInputPassword1" class="font-bold">الراتب</label>
                <input type="text" class="mb-4 p-2 outline outline-2 rounded-md outline-sky-200 focus:outline-sky-500"  value={{$emp->salary}} name="salary" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" step="0.01" placeholder="">
            
                <label for="exampleInputPassword1" class="font-bold">العنوان</label>
                <input type="text" class=" mb-4 p-2 outline outline-2 rounded-md outline-sky-200 focus:outline-sky-500" value={{$emp->address}} name="address" placeholder=" ">
                <button type="submit" class="bg-sky-500 p-3 rounded-md text-white font-bold">حفظ</button>
        </form>

    </div>

</body>
</html>