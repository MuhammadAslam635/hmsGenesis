<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class StatusUpdater
{
    /**
     * Update the status of a given model.
     *
     * @param string $modelName The name of the model (e.g., 'User', 'Order')
     * @param int $id The ID of the model instance
     * @param string $status The new status value
     * @param string $statusField The name of the status field (default: 'status')
     * @return Model|null The updated model instance or null if not found
     * @throws Exception If the model doesn't exist or doesn't have the specified status field
     */
    public function updateStatus(string $modelName, int $id, string $status, string $statusField = 'status'): ?Model
    {
        // Construct the full model class name
        $modelClass = "App\\Models\\$modelName";

        // Check if the model class exists
        if (!class_exists($modelClass)) {
            throw new Exception("Model $modelName does not exist.");
        }

        // Start a database transaction
        DB::beginTransaction();

        try {
            // Find the model instance
            $model = $modelClass::findOrFail($id);

            // Check if the model has the specified status field
            if (!$model->hasAttribute($statusField)) {
                throw new Exception("Model $modelName does not have a '$statusField' field.");
            }

            // Update the status
            $model->$statusField = $status;
            $model->save();

            // Commit the transaction
            DB::commit();

            return $model;
        } catch (Exception $e) {
            // Rollback the transaction in case of any error
            DB::rollBack();
            throw $e;
        }
    }
}
