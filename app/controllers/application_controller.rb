class ApplicationController < ActionController::Base
  protect_from_forgery

  ## keep user on same page after successful sign in or sign out
  def after_sign_out_path_for(resource_or_scope)
  	request.referrer
  end

end
