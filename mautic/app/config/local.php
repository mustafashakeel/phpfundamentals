<?php
$parameters = array(
	'db_driver' => 'pdo_mysql',
	'db_host' => 'localhost',
	'db_table_prefix' => 'mautic_',
	'db_port' => '8889',
	'db_name' => 'mautic',
	'db_user' => 'root',
	'db_password' => 'root',
	'db_backup_tables' => 1,
	'db_backup_prefix' => 'bak_',
	'db_server_version' => '5.7.21',
	'mailer_from_name' => 'Mike Qureshi',
	'mailer_from_email' => 'mike@thinkinglab.co',
	'mailer_transport' => 'mail',
	'mailer_host' => null,
	'mailer_port' => null,
	'mailer_user' => null,
	'mailer_password' => null,
	'mailer_encryption' => null,
	'mailer_auth_mode' => null,
	'mailer_spool_type' => 'memory',
	'mailer_spool_path' => '%kernel.root_dir%/spool',
	'secret_key' => '1ab0ab8b2d7eb4635dc8b323a9c1bc9c56ee6e79e2cd10493672441fc975e256',
	'site_url' => 'http://localhost:8888/mautic',
);