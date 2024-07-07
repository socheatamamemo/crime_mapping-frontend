    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up(): void
        {
            Schema::create('pending_crimes', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('description');
                $table->date('date');
                $table->string('status');
                $table->float('longitude');
                $table->float('latitude');
                $table->string('address');
                $table->string('crime_type');
                // Define foreign key
                $table->foreignId('reportedby_user_id')->constrained('users'); // Assuming 'users' table is where 'name' column is defined
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('pending_crimes');
        }
    };