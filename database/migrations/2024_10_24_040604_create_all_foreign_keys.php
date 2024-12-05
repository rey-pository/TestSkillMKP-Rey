<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAllForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Foreign key untuk segment_task
        DB::statement("ALTER TABLE segment_task
        ADD CONSTRAINT fk_segment_id FOREIGN KEY (segment_id) REFERENCES segment_service(id);");

        // Foreign key untuk master_supplier_product
        DB::statement("ALTER TABLE master_supplier_product
        ADD CONSTRAINT fk_product_category_id FOREIGN KEY (product_category_id) REFERENCES product_category(id) ON DELETE CASCADE;");

        DB::statement("ALTER TABLE master_supplier_product
        ADD CONSTRAINT fk_supplier_id FOREIGN KEY (supplier_id) REFERENCES users(id) ON DELETE CASCADE;");

        // Foreign key untuk supplier_product
        DB::statement("ALTER TABLE supplier_product
        ADD CONSTRAINT fk_users_id FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE CASCADE;");

        // Foreign key untuk distributor_record_request
        DB::statement("ALTER TABLE distributor_record_request
        ADD CONSTRAINT fk_outlet_id FOREIGN KEY (outlet_id) REFERENCES outlet(id) ON DELETE CASCADE;");
        DB::statement("ALTER TABLE distributor_record_request
        ADD CONSTRAINT fk_supplier_id FOREIGN KEY (supplier_id) REFERENCES users(id) ON DELETE CASCADE;");
        DB::statement("ALTER TABLE distributor_record_request
        ADD CONSTRAINT fk_product_id FOREIGN KEY (product_id) REFERENCES supplier_product(id) ON DELETE CASCADE;");

        // Foreign key untuk distributor_product
        DB::statement("ALTER TABLE distributor_product
        ADD CONSTRAINT fk_supplier_id FOREIGN KEY (supplier_id) REFERENCES master_supplier_product(id) ON DELETE CASCADE;");

        DB::statement("ALTER TABLE transaction_detail
        ADD CONSTRAINT fk_transaction_id FOREIGN KEY (transaction_id) REFERENCES transaction(id) ON DELETE CASCADE;");


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop foreign key untuk segment_task
        DB::statement("ALTER TABLE segment_task DROP CONSTRAINT IF EXISTS fk_segment_id;");

        // Drop foreign key untuk master_supplier_product
        DB::statement("ALTER TABLE master_supplier_product DROP CONSTRAINT IF EXISTS fk_product_category_id;");
        DB::statement("ALTER TABLE master_supplier_product DROP CONSTRAINT IF EXISTS fk_supplier_id;");

        // Drop foreign key untuk supplier_product
        DB::statement("ALTER TABLE supplier_product DROP CONSTRAINT IF EXISTS fk_users_id;");

        // Drop foreign key untuk distributor_record_request
        DB::statement("ALTER TABLE distributor_record_request DROP CONSTRAINT IF EXISTS fk_outlet_id;");

        // Drop foreign key untuk distributor_product
        DB::statement("ALTER TABLE distributor_product DROP CONSTRAINT IF EXISTS fk_supplier_id;");
        DB::statement("ALTER TABLE distributor_product DROP CONSTRAINT IF EXISTS fk_outlet_id;");
    }
}