<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col p-6 max-w-[80rem]">
        <div class="mb-5">
            <h1 class="text-2xl font-bold">بيانات الموظف :</h1>
            <h5 class="text-gray-500 text-2xl mx-2">{{$emp->name}}</h5>
        </div>
        <div class="flex flex-col border-2 border-sky-500 p-3 rounded-md   divide-y-2 divide-sky-400 gap-2">
            
               
                    <div class="grid grid-cols-6 gap-5 items-center">
                        <p class="font-bold">id</p>
                        <p class="font-bold">الاسم</p>
                        <p class="font-bold">رقم الهالتف</p>
                        <p class="font-bold">الراتب</p>
                        <p class="col-span-2 font-bold">العنوان</p>
                        <p>{{$emp->id}}</p>
                        <p>{{$emp->name}}</p>
                        <p>{{$emp->phone}}</p>
                        <p>{{$emp->salary}}</p>
                        <p>{{$emp->address}}</p>
                        <div class="flex gap-2 justify-self-end *:block *:py-2 *:px-4 *:text-white *:rounded-md *:font-bold" >
                            <a href="/edit/{{$emp->id}}" class="bg-sky-500">تعديل</a>
                            <a  onclick="return confirm('Are you sure?')" href="/delete/{{$emp->id}}" class="bg-red-500">حذف</a>
                            {{-- <a href="/delete/{{$emp->id}}" class="bg-red-500">حذف</a> --}}
                        </div>
                    </div>
                  
            
        </div>
        
    </div>
    <div class="mb-10 flex justify-end max-w-[78rem] mx-2">
      <a class="p-4 font-bold bg-sky-500 rounded-md text-white  " href="/employees"> رجوع</a>
    </div>
</body>
</html>