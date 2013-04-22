# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 20130422171956) do

  create_table "announcements", :force => true do |t|
    t.string   "a_or_b"
    t.text     "content"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "clubs", :force => true do |t|
    t.string   "slug"
    t.string   "name"
    t.string   "category"
    t.string   "content"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "memos", :force => true do |t|
    t.string   "title"
    t.string   "content"
    t.string   "bg_color"
    t.boolean  "is_image"
    t.string   "image_path"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
    t.string   "text_color"
  end

  create_table "sports", :force => true do |t|
    t.string   "slug"
    t.string   "title"
    t.text     "content"
    t.string   "season"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
    t.text     "alert"
  end

  create_table "users", :force => true do |t|
    t.string   "name"
    t.string   "email"
    t.datetime "created_at",      :null => false
    t.datetime "updated_at",      :null => false
    t.string   "password_digest"
    t.string   "remember_token"
  end

  add_index "users", ["email"], :name => "index_users_on_email", :unique => true
  add_index "users", ["remember_token"], :name => "index_users_on_remember_token"

end
