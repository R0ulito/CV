'''Horloge Astronomique de Prague'''
import os

Cycle=[1, 2, 3, 4, 3, 2]*20
HR=[]

for heure in range(1,25):
	if Cycle[0]==heure:
		HR.append(Cycle[0])
		del Cycle[0]
		print("A", heure, " heures, il sonnera", HR, "coups")
		HR=[]
	elif Cycle[0]!= heure:
		while sum(HR)<heure :
			HR.append(Cycle[0])
			del Cycle[0]
			if sum(HR)==heure:
				print("A", heure, " heures, il sonnera", HR, "coups")
				HR=[]
				break
	pass
