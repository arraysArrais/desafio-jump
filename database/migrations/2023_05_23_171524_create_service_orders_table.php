<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// -- Table structure for table `service_orders`
// --
// DROP TABLE IF EXISTS `service_orders`;
// CREATE TABLE `service_orders` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `vehiclePlate` char(7) NOT NULL,
//   `entryDateTime` datetime NOT NULL,
//   `exitDateTime` datetime DEFAULT '0001-01-01 00:00:00',
//   `priceType` varchar(55) DEFAULT NULL,
//   `price` decimal(12,2) DEFAULT '0.00',
//   `userId` int(11) NOT NULL,
//   PRIMARY KEY (`id`),
//   KEY `FkServiceOrderUser` (`userId`),
//   CONSTRAINT `FkServiceOrderUser` FOREIGN KEY (`userId`) REFERENCES `users` (`id`)
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->string('vehiclePlate', 7)->nullable(false);
            $table->dateTime('entryDateTime')->nullable(false);
            $table->dateTime('exitDateTime')->default('0001-01-01 00:00:00');
            $table->string('priceType', 55)->nullable();
            $table->decimal('price', 12, 2)->default(0.00);
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_orders', function(Blueprint $table){
            $table->dropForeignIdFor(User::class);
        });

        Schema::dropIfExists('service_orders');
    }
};



