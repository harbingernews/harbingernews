class CreateStudents < ActiveRecord::Migration
  def change
    create_table :students do |t|
     t.string :subject
     t.string :name

      t.timestamps
    end
  end
end
