=begin
puts "Hello"
print "Werld"
puts "!"



# variables 
# Letters, numbers, _ convention says Start with a Lowecase
# word, then additional words ara lowecase seprade by an underscore

# ex. my_first_variable


name = "punit"  #String 
age  =  20      #Integer 
gpa  = 3.5      #Decimal 
is_tall = true  #Boolean --> True/False


name = "Sanskar"

puts "Your name is " + name
puts "You are #{age} Year's old"



#Casting & Converting 

puts 3.14.to_i
puts 3.to_f
puts "3.0".to_s

puts 100 + "50".to_i
puts 100 + "50.99".to_f

#Strings

v = String.new("this is String");

greeting = "Hello"
#indexes :  01234

puts greeting.length
puts greeting[0]
puts greeting.include? "llo"
puts greeting.include? "c"
puts greeting[1,3]

#Numbers

puts 2*3         # Basic Arithmetic: +,-,/,+
puts 2**3        # Exponet it mean 2 ki Power 3
puts 10%3        # Modulus Op, : returns remainder of 10/3
puts 1+2*3       # order of operations 
puts 10/3.0      # int's and doubles

num = 10 

num += 100  # +=, -=, /=, *=

puts num 

num = -36.6

puts num.abs()
puts num.round()

# Math Class has useful math methods

puts Math.sqrt(144)v =v = String.new("this is String");


print "Enter Your Name : "
name = gets.chomp
puts "Hello #{name}, how are You"

print "Enter first num : "
num1 = gets.chomp

print "Enter Second num : "
num2 = gets.chomp
puts num1.to_i + num2.to_i


# Arrays 

lucky_numbers = [4, 8, "fifteen", 15, 23, 42.0]
#indexes  --->   0  1    2         3   4   5

lucky_numbers[0] = 90

puts lucky_numbers[0]
puts lucky_numbers[1]
puts lucky_numbers[2]
puts lucky_numbers[5]
puts lucky_numbers[-1]

puts "\n\n"
puts lucky_numbers[2,3]
puts "\n\n"
puts lucky_numbers[2..4]

puts lucky_numbers.length


# N Dimensional Arrays

numbers_grid = [[1,2],[3,4]]
numbers_grid[0][0] = 99

puts numbers_grid[0][0]
puts numbers_grid[0][1]
puts numbers_grid[1][0]
puts numbers_grid[1][1]


friends = []
friends.push("Oscar")
friends.push("Angela")
friends.push("Kevin")

friends.pop

print friends
puts "\n"

puts friends.reverse
puts "\n"

puts friends.sort
puts "\n"


puts friends.include? "Oscar"


# Methods

def add_numbers(num1, num2=99) # 99 is Defalt value 
    return num1 + num2 
end

sum = add_numbers(4,4)
puts sum




is_student  = true
is_smart = false

if(is_student & is_smart)
   puts "You are a student"
elsif is_student & !is_smart
    puts "You are not a smart student"
elsif is_student || is_smart
    puts "You are a Student or a Smart boy"
else
    puts "You are not a student and not smart"
end


if 1 > 3
    puts "number comparison was true"
end

if "a"<"b"
    puts "string comparsion was true"
end



# switch statements 

my_grade = gets.chomp 

case my_grade
when "A"
    puts "You Pass"
when "F"
    puts "You fail"
else
    puts "Invalid grade"    
end




# Dicionaries 

test_grades = {
    "Andy" => "B+",
    :Stanley => "C",
    "Ryan" => "A",
    3 => 95.2
}


test_grades['Andy'] = "B-"
puts test_grades["Andy"]
puts test_grades[:Stanley]
puts test_grades[3]


# while loops

index = 1
print "Enter the number : "
num = gets.chomp
while index <=10
    puts num.to_i*index
    index += 1
end 

=end

# for loop

for index in 0..10
    puts index
end




