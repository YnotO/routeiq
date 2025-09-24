<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">M-Pesa Gateway Settings</h4>
        </div>
        <div class="card-body">
            <form method="post">
                <input type="hidden" name="save" value="actives" />

                <div class="mb-3">
                    <label for="business_code" class="form-label">Business Shortcode</label>
                    <input type="text" class="form-control" id="business_code" name="business_code" required>
                </div>

                <div class="mb-3">
                    <label for="passkey" class="form-label">Passkey</label>
                    <input type="text" class="form-control" id="passkey" name="passkey" required>
                </div>

                <div class="mb-3">
                    <label for="callback_url" class="form-label">Callback URL</label>
                    <input type="text" class="form-control" id="callback_url" name="callback_url" 
                           value="http://yourdomain.com/mpesa_callback.php" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Save Settings
                </button>
            </form>
        </div>
    </div>
</div>
