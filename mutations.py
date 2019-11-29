def mutations(string,position,character):
    k=[]
    nlist=list(string)
    nlist[position]=character
    return("".join(nlist))
print(mutations("vinay",1,"k"))
