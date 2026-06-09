<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Admission System</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f8fafc] text-slate-800 font-sans antialiased min-h-screen flex flex-col">

  <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
      <div class="text-xl font-bold text-blue-600 tracking-wide">
        Logo
      </div>
      <nav>
        <a href="{{route('homepage')}}" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors">
          Admission
        </a>
      </nav>
    </div>
  </header>

  <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    
    <div class="bg-white rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.05)] border border-slate-100 w-full max-w-3xl p-8 sm:p-10">
      
      <h1 class="text-2xl font-bold text-slate-900 mb-6 tracking-tight">
        Student Admission Form
      </h1>
      
      <hr class="border-slate-200 mb-8" />

      <form action="{{route('student_store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="full-name" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
              Full Name
            </label>
            <input 
              type="text" 
              id="full-name" 
              name="full_name"
              class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm bg-slate-50/50"
              placeholder=""
            />
          @error('full_name')
            <span class="text-red-500"> {{$message}}</span>
          @enderror
          </div>
          <div>
            <label for="phone-number" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
              Phone Number
            </label>
            <input 
              type="tel" 
              id="phone-number" 
              name="phone_number"
              class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm bg-slate-50/50"
              placeholder=""
            />
            @error('phone_number')
            <span class="text-red-500"> {{$message}}</span>
            @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="email" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
              Email Address
            </label>
            <input 
              type="email" 
              id="email" 
              name="email"
              class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm bg-slate-50/50"
              placeholder=""
            />
            @error('email')
            <span class="text-red-500"> {{$message}}</span>
            @enderror
          </div>
          <div>
            <label for="parent-name" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
              Parent's Name
            </label>
            <input 
              type="text" 
              id="parent-name" 
              name="parent_name"
              class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm bg-slate-50/50"
              placeholder=""
            />
            @error('parent_name')
            <span class="text-red-500"> {{$message}}</span>
            @enderror
          </div>
        </div>

        <div>
          <label for="address" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
            Full Address
          </label>
          <textarea 
            id="address" 
            name="address" 
            rows="4"
            class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm resize-y bg-slate-50/50"
            placeholder=""
          ></textarea>
          @error('address')
            <span class="text-red-500"> {{$message}}</span>
          @enderror
        </div>

        <div class="bg-slate-50/70 border border-slate-100 rounded-xl p-6 space-y-4">
          <h2 class="text-sm font-bold text-slate-800 tracking-tight">
            Payment Information
          </h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label for="transaction-id" class="block text-[11px] font-semibold text-slate-600 uppercase tracking-wider mb-1.5">
                Transaction ID
              </label>
              <input 
                type="text" 
                id="transaction-id" 
                name="transaction_id"
                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm"
                placeholder=""
              />
              @error('transaction_id')
                <span class="text-red-500"> {{$message}}</span>
              @enderror
            </div>
            <div>
              <label for="payment-method" class="block text-[11px] font-semibold text-slate-600 uppercase tracking-wider mb-1.5">
                Payment Method
              </label>
              <select 
                id="payment-method" 
                name="payment_method"
                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm appearance-none cursor-pointer"
                style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%2364748b%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 0.65rem auto; padding-right: 2.5rem;"
              >
                <option value="bank_transfer">Bank Transfer</option>
                <option value="bkash">bKash</option>
                <option value="nagad">Nagad</option>
                <option value="card">Credit/Debit Card</option>
              </select>
              @error('payment_method')
                <span class="text-red-500"> {{$message}}</span>
              @enderror
            </div>
          </div>
        </div>

        <div class="pt-2">
          <button 
            type="submit" 
            class="w-full bg-[#1e6091] hover:bg-blue-700 text-white font-semibold py-3.5 px-4 rounded-lg shadow-sm hover:shadow transition-all duration-200 text-center text-sm tracking-wide block"
          >
            Submit Application
          </button>
        </div>

      </form>
    </div>
  </main>

</body>
</html>