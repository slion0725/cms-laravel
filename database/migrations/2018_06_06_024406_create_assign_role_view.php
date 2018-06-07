<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignRoleView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE VIEW assign_roles AS
                SELECT
                    users.id, users.email, GROUP_CONCAT(roles.name) AS roles
            FROM
                users
                    LEFT JOIN 
                        model_has_roles
                            ON
                                users.id = model_has_roles.model_id 
                    LEFT JOIN 
                        roles
                            ON
                                model_has_roles.role_id = roles.id
            GROUP BY users.id, users.email
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('drop view assign_roles');
    }
}
