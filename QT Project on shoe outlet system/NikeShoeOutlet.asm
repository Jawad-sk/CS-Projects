.data
	userName: .space 30 
	Address: .space 100
	welcome_msg: .asciiz "\t\t---- Welcome To  Nike Shoe Outlet Store ----\n\t\t"
	askUserName: .asciiz "\n\n\t\tPlease Enter Your Name : "
	askAddress: .asciiz "\n\n\t\tEnter Location for Delivery: "
	asknum: .asciiz "\n\n\t\tEnter Your Contact Number: "
	fname: .asciiz "C:\Users\jawad\Desktop\Coal\Project\stock.txt"
	buffer: .space 260
	buffer1:	.asciiz ""
	askOption: .asciiz "\n\n\t\tSelect option : "
	option: .word 0
	ace: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike Ace15\n\t\t************\n\n\tNike Ace15"
	zero: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike Adizero\n\t\t************\n\n\tNike Adizero"
	alpha: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike Alphabounce\n\t\t************\n\n\tNike Alphabounce"
	gzl: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike Gazelle\n\t\t************\n\n\tNike Gazelle"
	mun: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike Mundial\n\t\t************\n\n\tNike Mundial"
	runner: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike NMD Runner pk\n\t\t************\n\n\tNike NMD Runner pk"
	zapatos: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike NMD Zapatos\n\t\t************\n\n\tNike NMD Zapatos"
	pre: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike Predato\n\t\t************\n\n\tNike Predato"
	pred: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike Predator\n\t\t************\n\n\tNike Predator"
	sam: .asciiz "\n\n\n\t**************************************************************************\n\t\tNike Samba\n\t\t************\n\n\tNike Samba"
	price: .float 0.0
	totalPrice: .float 0.0
	priceTag: .asciiz "\tPrice = "
	totalPriceTag: .asciiz "\tTotal Price = "
	query: .asciiz "\n\tDo you want to buy this ? (Press y/n) "
	yes: .byte 'y'
	Delivery: .asciiz "\n\n\n\t-------------------------For Delivery (Press y/n)---------------------------------\n\n\t"
	charges: .asciiz "\n\n\n\tDelivery Charges : "
	buy: .asciiz "\n\t\tThanks For Buying Our Product :)"
	askQauntity: .asciiz "\n\n\t\tEnter Quantity : "
	askSize:	.asciiz	"\n\n\t\tEnter Size : "
	
.text
.globl main
main:



	#loading welcome message into $t0
	la $t0, welcome_msg
	move $a0, $t0
	li $v0, 4
	syscall
	
	#ask user to input his/her name
	la $t0, askUserName
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#get name 
	la $a0, userName
	la $a1, 1024
	li $v0, 8
	syscall
	
menu:
	#print menu items
	
	li $v0,13
    la $a0,fname

    li $a1,0
    li $a2,0
    syscall

    move $t6,$v0

    li $v0,14
    move $a0,$t6
    la $a1,buffer
    li $a2,260
    syscall
	
	li $v0,4
    la $a0,buffer
    syscall

    li $v0,16
    move $a0,$t6
    syscall
	
	#ask user to select option
	la $t0, askOption
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#select option 
	lw $t1, option
	li $v0, 5
	syscall
	move $t1, $v0

compare_option:
	#if option == 1 open Nike Ace15
	beq $t1, 1, ace15
	beq $t1, 2, adizero
	beq $t1, 3, Alphabounce
	beq $t1, 4, Gazelle
	beq $t1, 5, Mundial
	beq $t1, 6, NMD_Runner
	beq $t1, 7, NMD_Zapatos
	beq $t1, 8, Predato
	beq $t1, 9, Predator
	beq $t1, 10, Samba
	beq $t1, 11, exit
	j exit
	
#***************************************************************************************************************************************************************
#Nike Ace15	
	
ace15:
	#initialize float value
	li.s $f4, 5400.00
	
	#load message
	la $t0, ace
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike Ace15 ***********************************************************************************************************************************************	


#***************************************************************************************************************************************************************
#Nike Adizero
	
adizero:
	#initialize float value
	li.s $f4, 4250.00
	
	#load message
	la $t0, zero
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike Adizero ***********************************************************************************************************************************************


#***************************************************************************************************************************************************************
#Nike Alphabounce
	
Alphabounce:
	#initialize float value
	li.s $f4, 6999.00
	
	#load message
	la $t0, alpha
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike Alphabounce ***********************************************************************************************************************************************


#***************************************************************************************************************************************************************
#Nike Gazelle
	
Gazelle:
	#initialize float value
	li.s $f4, 7850.25
	
	#load message
	la $t0, gzl
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike Gazelle ***********************************************************************************************************************************************

#***************************************************************************************************************************************************************
#Nike Mundial
	
Mundial:
	#initialize float value
	li.s $f4, 3000.50
	
	#load message
	la $t0, mun
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike Mundial ***********************************************************************************************************************************************


#***************************************************************************************************************************************************************
#Nike NMD Runner pk 
	
NMD_Runner:
	#initialize float value
	li.s $f4, 8500.00
	
	#load message
	la $t0, runner
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike NMD Runner pk ***********************************************************************************************************************************************


#***************************************************************************************************************************************************************
#Nike Zapatos
	
NMD_Zapatos:
	#initialize float value
	li.s $f4, 8550.50
	
	#load message
	la $t0, zapatos
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike NMD Zapatos ***********************************************************************************************************************************************


#***************************************************************************************************************************************************************
#Nike Predato
	
Predato:
	#initialize float value
	li.s $f4, 4300.00
	
	#load message
	la $t0, pre
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike Predato ***********************************************************************************************************************************************


#***************************************************************************************************************************************************************
#Nike Predator
	
Predator:
	#initialize float value
	li.s $f4, 4500.00
	
	#load message
	la $t0, pred
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike Predator ***********************************************************************************************************************************************


#***************************************************************************************************************************************************************
#Nike Samba
	
Samba:
	#initialize float value
	li.s $f4, 9899.00
	
	#load message
	la $t0, sam
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#show price tag
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#print float 
	li $v0, 2
	mov.s $f12, $f4
	syscall
	
	#storing price 
	s.s $f4, price
	
	#query
	la $t0, query
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#yesOrNo
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, Delivery1
	j notBought
	

#End Nike Samba ***********************************************************************************************************************************************

notBought:
	j menu

Delivery1:

    la $t0, Delivery
	move $a0, $t0 
	li $v0, 4
	syscall
	
	li $v0, 12
	syscall
	move $t3, $v0
	
	
	#load byte
	lb $t2, yes
	beq $t3, $t2, DeliveryDetails
	j Bought2
	

DeliveryDetails:

#ask user to input his/her name
	la $t0, askUserName
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#get name 
	la $a0, userName
	la $a1, 1024
	li $v0, 8
	syscall
	
	li $t1,0
	
	#work:
	#lb $t2, userName($t0)
	
	#move $t2,  buffer1
	
	#b file
	
	
	la $t0, askAddress
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#get name 
	la $a0, Address
	la $a1, 1024
	li $v0, 8
	syscall
	
	la $t0, asknum
	move $a0, $t0 
	li $v0, 4
	syscall
	
	li $v0, 5
	syscall
	move $t6, $v0
	
	#file:
	#li $v0,13
	#la $a0,fname1
	#li $a1,1
	#li $a2,0
	#syscall
	#move $t6,$v0
	
	
	
	
	#li $v0,15
	#move $a0,$t6
	#la $a1,userName
	#li $a2,30
	#syscall
	
	
	#li $a0,16
	#move $a0,$t6
	#syscall
	

	
	
	
	
	
	b Bought




	
Bought:
	#ask Size from user
	la $t0, askSize
	move $a0,$t0
	li $v0,4
	syscall
	
	#Enter Size
	li $v0,5
	syscall
	move $t4, $v0
	

	#ask quantity from user 
	la $t0, askQauntity
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#enter quantity 
	li $v0, 5
	syscall
	move $t5, $v0
	
	#converting int into float 
	mtc1 $t5, $f5
	cvt.s.w $f5, $f5 
	
	
	#multiply product price 
	l.s $f4, price
	mul.s $f4, $f4, $f5
	
	#total price
	l.s $f6, totalPrice
	add.s $f6, $f6, $f4
	
	
	
	
	
	#show final price 
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	li $v0, 2
	mov.s $f12, $f4 
	syscall
	
	#Deliverycharges
	
	la $t0, charges
	move $a0, $t0 
	li $v0, 4
	syscall
	
	li.s $f7,200.00
	
	 li $v0, 2
     mov.s $f12, $f7  
     syscall
	
	add.s $f7,$f7,$f6
	
	#show total price 
	la $t0, totalPriceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	li $v0, 2
	mov.s $f12, $f7 
	syscall
	
	
	s.s $f4, price
	s.s $f7, totalPrice
	j menu

Bought2:
	#ask Size from user
	la $t0, askSize
	move $a0,$t0
	li $v0,4
	syscall
	
	#Enter Size
	li $v0,5
	syscall
	move $t4, $v0
	
	#ask quantity to user 
	la $t0, askQauntity
	move $a0, $t0 
	li $v0, 4
	syscall
	
	#enter quantity 
	li $v0, 5
	syscall
	move $t5, $v0
	
	#converting int into float 
	mtc1 $t5, $f5
	cvt.s.w $f5, $f5 
	
	
	#multiply product price 
	l.s $f4, price
	mul.s $f4, $f4, $f5
	
	#total price
	l.s $f6, totalPrice
	add.s $f6, $f6, $f4
	
	#show final price 
	la $t0, priceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	li $v0, 2
	mov.s $f12, $f4 
	syscall
	
	#show total price 
	la $t0, totalPriceTag
	move $a0, $t0 
	li $v0, 4
	syscall
	
	li $v0, 2
	mov.s $f12, $f6 
	syscall
	
	
	s.s $f4, price
	s.s $f6, totalPrice
	
	j menu

	
	exit:
		#product purchased
		la $t0, buy
		move $a0, $t0
		li $v0, 4
		syscall
 
		li $v0, 10
		syscall
	