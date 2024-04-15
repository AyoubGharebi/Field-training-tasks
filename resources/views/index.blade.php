<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> employees  </title>
        @vite('resources/css/app.css')
        
    </head>
    <body>
        <div class="container mt-5">
            
            <div class="flex flex-col p-6 max-w-[80rem]">
                <div class="mb-5">
                    <h1 class="text-2xl font-bold">بيانات الموظفين</h1>
                </div>
                <div class="flex flex-col border-2 border-sky-500 p-3 rounded-md   divide-y-2 divide-sky-400 gap-2">
                    <div class="grid grid-cols-4 px-3 *:font-bold">
                        <p>id</p>
                        <p>الاسم</p>
                        <p class="col-span-2">رقم الهاتف</p>
                    </div>
                    @if (count($emp) > 0)
                        @foreach ($emp as $emp)
                            <div class="grid grid-cols-4 gap-5 items-center p-3">
                                <p>{{$emp->id}}</p>
                                <p>{{$emp->name}}</p>
                                <p>{{$emp->phone}}</p>
                                <a class="block justify-self-end text-sky-600 underline" href="/show/{{ $emp->id }}">عرض التفاصيل</a>
                            </div>
                        @endforeach    
                    
                    @endif
                </div>
            </div>
           <div class="mb-10 flex justify-end max-w-[80rem] mx-6">
            
                <a class="p-4 font-bold bg-sky-500 rounded-md text-white" href="employees/create">إضافة موظف جديد</a>
           </div>
        </div>
    </body>
</html>