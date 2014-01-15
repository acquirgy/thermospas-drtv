set :application, "kitchenaidtvoffer.com"
set :repository,  "https://kd4yal:1thuhuong@github.com/bythepixel/kitchenaid-mixer.git"
set :scm, :git
set :user, "deploy"
set :use_sudo, false


task :staging do
  role :web, "96.126.115.153", :primary => true
  set :deploy_to, "/srv/www/thermospastvoffer.com/app"
  set :app_environment, "staging"
  set :branch, "master"
  set :stage, "staging"
  set :password, "PrAswubu6put"
end

task :production do
  role :web, "192.168.112.155", :primary => true
  set :deploy_to, "/var/www/html/thermospastvoffer.com"
  set :app_environment, "production"
  set(:user) { Capistrano::CLI.ui.ask('Username: ') }
  set :branch, "master"
  set :stage, "production"
end

# Custom deployment tasks
namespace :deploy do
  # These are all no-op
  task :migrate do ; end
  task :stop do ; end
  task :start do ; end
  task :restart do ; end

  task :update_config_files do
    # run "ln -s #{release_path}/.htaccess_#{stage} #{release_path}/.htaccess"
    # run "ln -s #{release_path}/application/config/config_#{stage}.php #{release_path}/application/config/config.php"
    # run "ln -s #{release_path}/application/config/database_#{stage}.php #{release_path}/application/config/database.php"
    # run "ln -s #{release_path}/application/config/paymetric_#{stage}.php #{release_path}/application/config/paymetric.php"
  end

  task :setup_shared do
    run "mkdir -p #{shared_path}/uploads/order_{exports,imports,updates}"
  end

  task :link_shared_paths do
    run "chmod -R g+w #{release_path}"
    run "ln -nfs #{shared_path}/uploads #{release_path}/uploads"
  end

  task :update_permissions do
    run "chmod +x #{release_path}/cron.php"
  end

  after "deploy:setup", "deploy:setup_shared"
  after "deploy", "deploy:update_config_files", "deploy:link_shared_paths", "deploy:update_permissions"

end